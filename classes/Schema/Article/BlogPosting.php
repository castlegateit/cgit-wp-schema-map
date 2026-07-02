<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Article;

use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org BlogPosting
 *
 * Extends Article with a BlogPosting-specific spatie type. The Schema.org spec
 * defines no mandatory new properties over Article; the primary purpose of this
 * sub-type is to signal to search engines that the content is a blog post rather
 * than a general article, which affects how it may be presented in rich results.
 *
 * All base Article properties are inherited and set via the parent class setters.
 *
 * @link https://schema.org/BlogPosting
 */
class BlogPosting extends Article
{
    /**
     * Build and return the spatie/schema-org BlogPosting object with all Article properties applied.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        // All work is delegated to the parent helper. Passing Schema::blogPosting()
        // instead of Schema::article() ensures the @type in the JSON-LD output
        // reads BlogPosting rather than Article.
        return $this->populateSpatieArticle(Schema::blogPosting());
    }
}
