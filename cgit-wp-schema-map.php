<?php

/**
 * Plugin Name:  Castlegate IT WP Schema Map
 * Plugin URI:   https://github.com/castlegateit/cgit-wp-schema-map
 * Description:  Maps existing site content to Schema.org structured data output.
 * Version:      1.0.0
 * Requires PHP: 8.2
 * Author:       Castlegate IT
 * Author URI:   https://www.castlegateit.co.uk/
 * Update URI:   https://github.com/castlegateit/cgit-wp-schema-map
 */

use Castlegate\SchemaMap\Plugin;

// Prevent direct access outside of the WordPress bootstrap.
if (!defined('ABSPATH')) {
    wp_die('Access denied');
}

/** Plugin version string, mirrored in the file header above. */
define('CGIT_WP_SCHEMA_MAP_VERSION', '1.0.0');

/** Absolute path to the main plugin file, used for activation hooks and asset URLs. */
define('CGIT_WP_SCHEMA_MAP_PLUGIN_FILE', __FILE__);

/** Absolute path to the plugin directory. */
define('CGIT_WP_SCHEMA_MAP_PLUGIN_DIR', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';

Plugin::init();
