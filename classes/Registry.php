<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap;

/**
 * Central registry for Schema.org output callbacks.
 *
 * Themes and plugins register callable factories with {@see register()}. On the
 * wp_head action, {@see output()} invokes every callback, passing the current
 * global $post, then renders each resulting schema as a JSON-LD <script> tag.
 *
 * Callbacks that return null, a non-schema value, or an empty schema are
 * silently skipped. Schemas implementing {@see MergeableSchema} are grouped by
 * class and consolidated into a single block; all other schemas are output
 * individually. Merged schemas are always output before individual ones.
 */
class Registry
{
    /**
     * Registered schema factory callbacks, in registration order.
     *
     * @var array<int, callable>
     */
    private static array $callbacks = [];

    /**
     * Schema instances that were resolved and output on the current request.
     * Populated by output() on wp_head, then consumed by adminBar() on
     * admin_bar_menu (which fires later, during body rendering).
     *
     * @var AbstractSchema[]
     */
    private static array $resolved = [];

    /**
     * Hook the output method into wp_head.
     *
     * Called once by {@see Plugin::init()} during plugin bootstrap.
     *
     * @return void
     */
    public static function init(): void
    {
        add_action('wp_head', [self::class, 'output']);
        add_action('admin_bar_menu', [self::class, 'adminBar'], 100);
    }

    /**
     * Register a schema factory callback.
     *
     * The callback receives the global $post object (WP_Post|null) and should
     * return an {@see AbstractSchema} instance, or null if no schema is
     * applicable for the current request. Returning null or an empty schema
     * is safe; the Registry will skip it silently.
     *
     * @param callable $callback A callable with the signature
     *                           (WP_Post|null $post): AbstractSchema|null
     * @return void
     */
    public static function register(callable $callback): void
    {
        self::$callbacks[] = $callback;
    }

    /**
     * Invoke all registered callbacks and output their schemas as JSON-LD.
     *
     * Hooked to wp_head. Schemas are separated into two buckets: mergeable
     * types (keyed by class name so duplicates are folded together) and
     * non-mergeable types (collected as individual instances). Merged schemas
     * are echoed first, followed by individual ones.
     *
     * @return void
     */
    public static function output(): void
    {
        global $post;

        // Mergeable schemas are keyed by class name so that multiple callbacks
        // returning the same type can be consolidated into one output block.
        $merged = [];

        // Non-mergeable schemas are collected in order and output individually.
        $separate = [];

        foreach (self::$callbacks as $callback) {
            $result = $callback($post);

            // Skip callbacks that return nothing useful — null, a non-schema
            // value, or a schema with no data to output.
            if (!($result instanceof AbstractSchema) || $result->isEmpty()) {
                continue;
            }

            if ($result instanceof MergeableSchema) {
                $class = get_class($result);

                // First instance of this type becomes the canonical block;
                // subsequent instances are folded into it via mergeWith().
                if (!isset($merged[$class])) {
                    $merged[$class] = $result;
                } else {
                    $merged[$class]->mergeWith($result);
                }
            } else {
                $separate[] = $result;
            }
        }

        // Output merged schemas first (e.g. a single consolidated FAQPage),
        // then output individual schemas one block each.
        foreach ($merged as $schema) {
            echo $schema->toScript() . PHP_EOL;
        }

        foreach ($separate as $schema) {
            echo $schema->toScript() . PHP_EOL;
        }

        // Store for the admin bar, which renders after wp_head.
        self::$resolved = array_merge(array_values($merged), $separate);
    }

    /**
     * Add a Schema Map entry to the WordPress admin bar listing all schema
     * types output on the current page, plus links to the Schema.org validator
     * and Google Rich Results Test.
     *
     * Only shown on front-end pages to users with the capability defined by the
     * cgit_wp_schema_map_admin_bar_capability filter (default: manage_options).
     *
     * @param \WP_Admin_Bar $adminBar The WordPress admin bar instance.
     * @return void
     */
    public static function adminBar(\WP_Admin_Bar $adminBar): void
    {
        // Only show on front-end pages — the schema output hooks don't run in wp-admin.
        if (is_admin()) {
            return;
        }

        // Allow the required capability to be overridden per project.
        $capability = apply_filters('cgit_wp_schema_map_admin_bar_capability', 'manage_options');

        if (!current_user_can($capability)) {
            return;
        }

        $count = count(self::$resolved);

        // Top-level node showing how many schemas are active on this page.
        $adminBar->add_node([
            'id'    => 'cgit-schema-map',
            'title' => sprintf('Schema Map (%d)', $count),
        ]);

        if ($count === 0) {
            // Show a non-linked placeholder so the menu is not empty, making
            // it clear the plugin is active but nothing resolved on this page.
            $adminBar->add_node([
                'id'     => 'cgit-schema-map-none',
                'parent' => 'cgit-schema-map',
                'title'  => 'No schemas on this page',
            ]);
        } else {
            // One child node per resolved schema, using the short class name
            // (e.g. "Article") rather than the fully-qualified namespace.
            foreach (self::$resolved as $index => $schema) {
                $type = (new \ReflectionClass($schema))->getShortName();

                $adminBar->add_node([
                    'id'     => 'cgit-schema-map-type-' . $index,
                    'parent' => 'cgit-schema-map',
                    'title'  => $type,
                ]);
            }
        }

        // A secondary group creates a visual separator before the validator links.
        $adminBar->add_group([
            'id'     => 'cgit-schema-map-validators',
            'parent' => 'cgit-schema-map',
            'meta'   => ['class' => 'ab-sub-secondary'],
        ]);

        // Construct the current page URL for passing to the external validators.
        // set_url_scheme() ensures the correct http/https prefix is used.
        $pageUrl = set_url_scheme('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

        $adminBar->add_node([
            'id'     => 'cgit-schema-map-validate-schema-org',
            'parent' => 'cgit-schema-map-validators',
            'title'  => 'Validate with Schema.org',
            'href'   => 'https://validator.schema.org/#url=' . rawurlencode($pageUrl),
            'meta'   => ['target' => '_blank', 'rel' => 'noopener noreferrer'],
        ]);

        $adminBar->add_node([
            'id'     => 'cgit-schema-map-validate-google',
            'parent' => 'cgit-schema-map-validators',
            'title'  => 'Test with Google Rich Results',
            'href'   => 'https://search.google.com/test/rich-results?url=' . rawurlencode($pageUrl),
            'meta'   => ['target' => '_blank', 'rel' => 'noopener noreferrer'],
        ]);
    }
}
