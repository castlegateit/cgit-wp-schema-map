<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap;

/**
 * Base class for all Schema.org wrapper types in this plugin.
 *
 * Each concrete subclass wraps one Schema.org type and is responsible for
 * collecting the data needed to describe it, converting that data into a
 * spatie/schema-org object graph, and rendering the final JSON-LD
 * <script> tag.
 *
 * Subclasses that can be merged across multiple template registrations should
 * additionally implement the {@see MergeableSchema} interface.
 *
 * @link https://schema.org/
 */
abstract class AbstractSchema
{
    /**
     * Return whether the schema has any data worth outputting.
     *
     * The Registry silently skips any schema for which this returns true,
     * so subclasses should return true whenever the output would be an empty
     * or meaningless structured-data block.
     *
     * @return bool
     */
    abstract public function isEmpty(): bool;

    /**
     * Return the underlying spatie/schema-org object that represents this
     * schema, for callers that need to compose or inspect it directly.
     *
     * @return mixed
     */
    abstract public function toSpatieObject(): mixed;

    /**
     * Render the schema as a JSON-LD <script> tag ready for inclusion in
     * the page <head>.
     *
     * JSON_HEX_TAG encodes < and > as < and > so that a
     * </script> sequence inside a property value cannot break out of the
     * surrounding <script> block — a defence against XSS via user-controlled
     * content. spatie's own toScript() does not apply this flag.
     *
     * @return string
     */
    public function toScript(): string
    {
        $json = json_encode(
            $this->toSpatieObject()->toArray(),
            JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG
        );

        return '<script type="application/ld+json">' . $json . '</script>';
    }
}
