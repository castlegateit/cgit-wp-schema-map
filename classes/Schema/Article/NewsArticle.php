<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Article;

use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org NewsArticle
 *
 * Extends Article with fields specific to news journalism, including print
 * publication metadata (edition, section, page, column) and the dateline
 * traditionally used in wire-service copy. All base Article properties are
 * inherited and set via the parent class setters.
 *
 * @link https://schema.org/NewsArticle
 */
class NewsArticle extends Article
{
    /**
     * The location from which the story was reported, traditionally placed at the start of the article body.
     *
     * @var string|null
     */
    private ?string $dateline = null;

    /**
     * The print edition in which the article appeared.
     *
     * @var string|null
     */
    private ?string $printEdition = null;

    /**
     * The print section in which the article appeared (e.g. "Business").
     *
     * @var string|null
     */
    private ?string $printSection = null;

    /**
     * The page on which the article appeared in the print edition.
     *
     * @var string|null
     */
    private ?string $printPage = null;

    /**
     * The column in which the article appeared in the print edition.
     *
     * @var string|null
     */
    private ?string $printColumn = null;

    /**
     * Set the dateline — the location from which the story was reported.
     * Traditionally placed at the start of the article body in wire-service copy.
     *
     * @param string $dateline The reporting location (e.g. "London").
     * @return void
     */
    public function dateline(string $dateline): void
    {
        $this->dateline = $dateline;
    }

    /**
     * Set the print edition in which this article appeared.
     *
     * @param string $printEdition Edition name or identifier.
     * @return void
     */
    public function printEdition(string $printEdition): void
    {
        $this->printEdition = $printEdition;
    }

    /**
     * Set the print section in which this article appeared.
     *
     * @param string $printSection Section name (e.g. "Business").
     * @return void
     */
    public function printSection(string $printSection): void
    {
        $this->printSection = $printSection;
    }

    /**
     * Set the page on which this article appeared in the print edition.
     *
     * @param string $printPage Page number or identifier.
     * @return void
     */
    public function printPage(string $printPage): void
    {
        $this->printPage = $printPage;
    }

    /**
     * Set the column in which this article appeared in the print edition.
     *
     * @param string $printColumn Column number or identifier.
     * @return void
     */
    public function printColumn(string $printColumn): void
    {
        $this->printColumn = $printColumn;
    }

    /**
     * Build and return the spatie/schema-org NewsArticle object with all properties applied.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        // Populate all base Article properties onto a spatie NewsArticle object,
        // then layer the NewsArticle-specific fields on top.
        $article = $this->populateSpatieArticle(Schema::newsArticle());

        if ($this->dateline !== null) {
            $article->dateline($this->dateline);
        }

        if ($this->printEdition !== null) {
            $article->printEdition($this->printEdition);
        }

        if ($this->printSection !== null) {
            $article->printSection($this->printSection);
        }

        if ($this->printPage !== null) {
            $article->printPage($this->printPage);
        }

        if ($this->printColumn !== null) {
            $article->printColumn($this->printColumn);
        }

        return $article;
    }
}
