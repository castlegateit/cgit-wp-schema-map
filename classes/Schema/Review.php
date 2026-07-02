<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org Review
 *
 * Represents an individual customer or critic review. Typically used as a
 * nested property on a LocalBusiness or Organization via their addReview()
 * method, but can also be output as a standalone schema block.
 *
 * The author is stored as a plain string name and wrapped in a nested
 * Schema::person()->name() object internally at output time — callers do not
 * need to construct a Person schema just to name a reviewer.
 *
 * The ratingValue, bestRating, and worstRating properties are assembled into a
 * nested Schema::rating() (reviewRating) block internally. Callers set values
 * directly on the Review without needing to know about the nested Rating type.
 *
 * @link https://schema.org/Review
 */
class Review extends AbstractSchema
{
    /**
     * The name of the reviewer, stored as a plain string.
     *
     * @var string|null
     */
    private ?string $author = null;

    /**
     * The written body text of the review.
     *
     * @var string|null
     */
    private ?string $reviewBody = null;

    /**
     * The numeric rating given by this reviewer (e.g. 4.5).
     *
     * @var float|null
     */
    private ?float $ratingValue = null;

    /**
     * The best (highest) possible value on the reviewer's rating scale.
     *
     * @var float|null
     */
    private ?float $bestRating = null;

    /**
     * The worst (lowest) possible value on the reviewer's rating scale.
     *
     * @var float|null
     */
    private ?float $worstRating = null;

    /**
     * ISO 8601 date the review was published, normalised from input on assignment.
     *
     * @var string|null
     */
    private ?string $datePublished = null;

    /**
     * The canonical URL of the review.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * Set the name of the reviewer. Stored as a plain string; wrapped in a
     * nested Person object automatically at output time.
     *
     * @param string $author The reviewer's name.
     * @return void
     */
    public function author(string $author): void
    {
        $this->author = $author;
    }

    /**
     * Set the written body text of the review.
     *
     * @param string $reviewBody The review text.
     * @return void
     */
    public function reviewBody(string $reviewBody): void
    {
        $this->reviewBody = $reviewBody;
    }

    /**
     * Set the numeric rating given by this reviewer. Will be assembled into a
     * nested reviewRating block alongside bestRating and worstRating if those
     * are also set. If ratingValue is not set, no reviewRating block is emitted.
     *
     * @param float $ratingValue The rating score (e.g. 4.5).
     * @return void
     */
    public function ratingValue(float $ratingValue): void
    {
        $this->ratingValue = $ratingValue;
    }

    /**
     * Set the best (highest) possible rating on this reviewer's scale.
     * Only emitted if ratingValue is also set.
     *
     * @param float $bestRating The maximum possible rating value.
     * @return void
     */
    public function bestRating(float $bestRating): void
    {
        $this->bestRating = $bestRating;
    }

    /**
     * Set the worst (lowest) possible rating on this reviewer's scale.
     * Only emitted if ratingValue is also set.
     *
     * @param float $worstRating The minimum possible rating value.
     * @return void
     */
    public function worstRating(float $worstRating): void
    {
        $this->worstRating = $worstRating;
    }

    /**
     * Set the date the review was published. MySQL datetime strings are accepted
     * and normalised to ISO 8601 automatically.
     *
     * @param string $date A date string parseable by strtotime, or an ISO 8601 string.
     * @return void
     */
    public function datePublished(string $date): void
    {
        $this->datePublished = $this->formatDate($date);
    }

    /**
     * Set the canonical URL of the review.
     *
     * @param string $url The review URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * A Review is considered empty without an author, as an anonymous review
     * cannot be attributed and is unlikely to qualify for rich results.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->author === null;
    }

    /**
     * Build and return the spatie/schema-org Review object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $review = Schema::review();

        if ($this->author !== null) {
            // Schema.org requires author to be a Person or Organization type.
            // Wrapping the plain string name in a minimal Person object satisfies
            // that requirement without forcing callers to construct one themselves.
            $review->author(Schema::person()->name($this->author));
        }

        if ($this->reviewBody !== null) {
            $review->reviewBody($this->reviewBody);
        }

        if ($this->ratingValue !== null) {
            // Assemble the rating fields into the required nested reviewRating
            // block. bestRating and worstRating are optional but included when
            // set so search engines can correctly interpret the scale.
            $reviewRating = Schema::rating()->ratingValue($this->ratingValue);

            if ($this->bestRating !== null) {
                $reviewRating->bestRating($this->bestRating);
            }

            if ($this->worstRating !== null) {
                $reviewRating->worstRating($this->worstRating);
            }

            $review->reviewRating($reviewRating);
        }

        if ($this->datePublished !== null) {
            $review->datePublished($this->datePublished);
        }

        if ($this->url !== null) {
            $review->url($this->url);
        }

        return $review;
    }

    /**
     * Normalise a date string to ISO 8601 format.
     *
     * strtotime() handles MySQL datetime strings ("2024-01-15 09:30:00") and
     * most other common formats. If it returns false the input is already in a
     * format strtotime cannot parse (e.g. an ISO 8601 string with timezone
     * offset), so the raw value is returned unchanged rather than discarding it.
     *
     * @param string $date Input date string.
     * @return string ISO 8601 date string, or the original input if conversion fails.
     */
    private function formatDate(string $date): string
    {
        $timestamp = strtotime($date);

        return $timestamp !== false ? date('c', $timestamp) : $date;
    }
}
