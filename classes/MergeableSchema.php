<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap;

/**
 * Marks a schema type as capable of being merged with another instance of
 * itself.
 *
 * When multiple callbacks registered with the Registry return the same
 * MergeableSchema subclass, the Registry groups them by class name and folds
 * each subsequent instance into the first by calling mergeWith(). The result
 * is a single, consolidated JSON-LD block rather than one block per template
 * registration.
 *
 * This is particularly useful for schema types such as FAQPage, where
 * questions may be added from several different templates or page-builder
 * blocks but must appear in one schema block to satisfy Google's requirements.
 */
interface MergeableSchema
{
    /**
     * Merge the data from another instance of the same schema type into this
     * instance.
     *
     * Implementations may safely access private members of $other when $other
     * is an instance of the same class, as PHP permits same-class private
     * access across instances.
     *
     * @param AbstractSchema $other The schema instance whose data should be
     *                              absorbed into this one. Implementations
     *                              should check that $other is an instance of
     *                              themselves before accessing class-specific
     *                              members.
     * @return void
     */
    public function mergeWith(AbstractSchema $other): void;
}
