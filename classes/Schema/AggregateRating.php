<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Schema.org AggregateRating
 *
 * Represents a roll-up of multiple ratings or reviews. This schema is almost
 * always used as a nested property of another type (LocalBusiness, Organization,
 * Product) via their aggregateRating() setter, rather than being output as a
 * standalone block.
 *
 * reviewCount and ratingCount serve distinct purposes: reviewCount is the
 * number of reviews that include written content, while ratingCount covers all
 * ratings including those with no written text (star-only). Google requires at
 * least one of the two to be present for a rich result to be eligible.
 *
 * Google policy note: rich results for AggregateRating are only shown for
 * ratings sourced from legitimate third parties. Self-aggregated first-party
 * testimonials (e.g. a business displaying its own customer feedback) do not
 * qualify and will not produce rich results in Google Search.
 *
 * @link https://schema.org/AggregateRating
 */
class AggregateRating extends AbstractSchema
{
    /**
     * The aggregate numeric rating value (e.g. 4.5).
     *
     * @var float|null
     */
    private ?float $ratingValue = null;

    /**
     * Number of reviews that include written content, not just a star rating.
     *
     * @var int|null
     */
    private ?int $reviewCount = null;

    /**
     * Total number of ratings, including those without any written review text.
     *
     * @var int|null
     */
    private ?int $ratingCount = null;

    /**
     * The best (highest) possible value on the rating scale.
     *
     * @var float|null
     */
    private ?float $bestRating = null;

    /**
     * The worst (lowest) possible value on the rating scale.
     *
     * @var float|null
     */
    private ?float $worstRating = null;

    /**
     * Set the aggregate numeric rating value.
     *
     * @param float $ratingValue The aggregate rating score (e.g. 4.5).
     * @return void
     */
    public function ratingValue(float $ratingValue): void
    {
        $this->ratingValue = $ratingValue;
    }

    /**
     * Set the number of reviews that include written content (not just a star rating).
     *
     * Google requires at least one of reviewCount or ratingCount to be present.
     *
     * @param int $reviewCount Number of written reviews.
     * @return void
     */
    public function reviewCount(int $reviewCount): void
    {
        $this->reviewCount = $reviewCount;
    }

    /**
     * Set the total number of ratings, including those without written reviews.
     *
     * Google requires at least one of reviewCount or ratingCount to be present.
     *
     * @param int $ratingCount Total number of ratings (written + star-only).
     * @return void
     */
    public function ratingCount(int $ratingCount): void
    {
        $this->ratingCount = $ratingCount;
    }

    /**
     * Set the best (highest) possible value on the rating scale.
     *
     * @param float $bestRating The maximum possible rating value.
     * @return void
     */
    public function bestRating(float $bestRating): void
    {
        $this->bestRating = $bestRating;
    }

    /**
     * Set the worst (lowest) possible value on the rating scale.
     *
     * @param float $worstRating The minimum possible rating value.
     * @return void
     */
    public function worstRating(float $worstRating): void
    {
        $this->worstRating = $worstRating;
    }

    /**
     * An AggregateRating is considered empty without a ratingValue, as that is
     * the core numeric score the type exists to convey.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->ratingValue === null;
    }

    /**
     * Build and return the spatie/schema-org AggregateRating object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $rating = Schema::aggregateRating();

        if ($this->ratingValue !== null) {
            $rating->ratingValue($this->ratingValue);
        }

        if ($this->reviewCount !== null) {
            $rating->reviewCount($this->reviewCount);
        }

        if ($this->ratingCount !== null) {
            $rating->ratingCount($this->ratingCount);
        }

        if ($this->bestRating !== null) {
            $rating->bestRating($this->bestRating);
        }

        if ($this->worstRating !== null) {
            $rating->worstRating($this->worstRating);
        }

        return $rating;
    }
}
