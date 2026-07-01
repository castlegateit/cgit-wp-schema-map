<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Schema.org BreadcrumbList wrapper.
 *
 * Provides a simple interface for building a BreadcrumbList schema block.
 * Callers add breadcrumb items in display order; this class handles the
 * conversion to spatie ListItem objects and automatically assigns the
 * 1-based position values that Schema.org requires.
 *
 * Does not implement {@see MergeableSchema} because a page should have exactly
 * one breadcrumb trail — if multiple registrations are needed for the same
 * page, a single callback that constructs the full list is more appropriate.
 *
 * @link https://schema.org/BreadcrumbList
 */
class BreadcrumbList extends AbstractSchema
{
    /**
     * Ordered list of breadcrumb items, each a map with 'name' and 'url' keys.
     *
     * @var array<int, array{name: string, url: string}>
     */
    private array $items = [];

    /**
     * Append a breadcrumb item to the list.
     *
     * Items should be added in the order they appear in the breadcrumb trail,
     * from the site root to the current page. Position numbers are assigned
     * automatically.
     *
     * @param string $name The visible label for this breadcrumb step.
     * @param string $url  The canonical URL for this breadcrumb step.
     * @return void
     */
    public function addItem(string $name, string $url): void
    {
        $this->items[] = ['name' => $name, 'url' => $url];
    }

    /**
     * Return whether no breadcrumb items have been added yet.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    /**
     * Build and return the spatie/schema-org BreadcrumbList object.
     *
     * Each item in $items is converted to a spatie ListItem with an explicit
     * position. Schema.org requires 1-based position numbering, so the
     * 0-based array index is incremented by one.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        // array_keys() is passed as the second array argument to array_map so
        // the callback receives both the item data and its 0-based index.
        // Adding 1 to the index produces the 1-based position values that
        // Schema.org requires for BreadcrumbList items.
        $listItems = array_map(
            fn(array $item, int $index) => Schema::listItem()
                ->position($index + 1)
                ->name($item['name'])
                ->item($item['url']),
            $this->items,
            array_keys($this->items)
        );

        return Schema::breadcrumbList()->itemListElement($listItems);
    }
}
