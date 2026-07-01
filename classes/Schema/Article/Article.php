<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Article;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Schema.org Article
 *
 * Maps WordPress post Docontent to the Schema.org Article type. The author and
 * publisher properties must be a Person or Organization schema instance — plain
 * strings are not accepted, as schema.org does not allow text values for these
 * properties. They are resolved to their underlying Spatie types at output time
 * via toSpatieObject().
 *
 * Dates supplied via datePublished() and dateModified() are normalised to ISO
 * 8601 format internally, so raw MySQL datetime strings can be passed directly.
 *
 * Properties and helper methods are protected rather than private so that
 * sub-types (NewsArticle, BlogPosting) can call populateSpatieArticle() with
 * a different spatie object and inherit all base property assignments.
 *
 * @link https://schema.org/Article
 */
class Article extends AbstractSchema
{
    /**
     * The headline or title of the article.
     *
     * @var string|null
     */
    protected ?string $headline = null;

    /**
     * ISO 8601 publication date, normalised from the input string on assignment.
     *
     * @var string|null
     */
    protected ?string $datePublished = null;

    /**
     * ISO 8601 last-modified date, normalised from the input string on assignment.
     *
     * @var string|null
     */
    protected ?string $dateModified = null;

    /**
     * The author of the article. Must be a Person or Organization schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    protected ?AbstractSchema $author = null;

    /**
     * The publisher of the article. Must be an Organization or Person schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    protected ?AbstractSchema $publisher = null;

    /**
     * URL of a representative image for the article.
     *
     * @var string|null
     */
    protected ?string $image = null;

    /**
     * A short textual description or summary of the article.
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * The full plain-text body of the article. HTML tags are stripped and
     * whitespace is normalised automatically when set via articleBody().
     *
     * @var string|null
     */
    protected ?string $articleBody = null;

    /**
     * The canonical URL of the article.
     *
     * @var string|null
     */
    protected ?string $url = null;

    /**
     * Comma-separated keywords or tags associated with the article.
     *
     * @var string|null
     */
    protected ?string $keywords = null;

    /**
     * Set the article headline.
     *
     * @param string $headline The article headline.
     * @return void
     */
    public function headline(string $headline): void
    {
        $this->headline = $headline;
    }

    /**
     * Set the article's publication date. MySQL datetime strings are accepted
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
     * Set the date the article was last modified. MySQL datetime strings are
     * accepted and normalised to ISO 8601 automatically.
     *
     * @param string $date A date string parseable by strtotime, or an ISO 8601 string.
     * @return void
     */
    public function dateModified(string $date): void
    {
        $this->dateModified = $this->formatDate($date);
    }

    /**
     * Set the author of the article.
     *
     * @param AbstractSchema $author A Person or Organization schema instance. Plain strings are not valid.
     * @return void
     */
    public function author(AbstractSchema $author): void
    {
        $this->author = $author;
    }

    /**
     * Set the publisher of the article.
     *
     * @param AbstractSchema $publisher An Organization or Person schema instance. Plain strings are not valid.
     * @return void
     */
    public function publisher(AbstractSchema $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * Set the URL of a representative image for the article.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Set a short textual description or summary of the article.
     *
     * @param string $description The article description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the full body text of the article. HTML is converted to plain text
     * automatically: block-level closing tags become paragraph breaks, <br>
     * becomes a single newline, and all remaining tags are stripped. Raw HTML
     * from the_content() or captured template output can be passed directly.
     *
     * @param string $body The article body, with or without HTML markup.
     * @return void
     */
    public function articleBody(string $body): void
    {
        // All block-level elements whose closing tag should become a paragraph
        // break. Void elements (br, hr) are handled separately below.
        $block = 'p|div|h[1-6]|ul|ol|dl|dt|dd|li|blockquote|pre|figure|figcaption'
               . '|table|thead|tbody|tfoot|tr|td|th|caption'
               . '|section|article|aside|header|footer|main|nav';

        // Replace closing block-level tags with double newlines before stripping,
        // so that paragraph breaks survive. If we stripped tags first, adjacent
        // block elements would merge their text content without any separator.
        $text = preg_replace('/<\/(' . $block . ')>/i', "\n\n", $body);

        // br and hr are void elements with no closing tag, so they need their
        // own replacement. br is a soft line break; hr is a thematic separator
        // and gets the same treatment.
        $text = preg_replace('/<(br|hr)\s*\/?>/i', "\n", $text);

        // Strip all remaining tags. At this point only opening block tags,
        // inline tags, and any attributes remain — all converted to nothing.
        $text = strip_tags($text);

        // Collapse runs of spaces and tabs on a single line to one space.
        // Newlines are intentionally excluded so the paragraph structure
        // created above is preserved.
        $text = preg_replace('/[ \t]+/', ' ', $text);

        // Normalise consecutive newlines to a maximum of two. Deeply nested
        // block elements (e.g. div > div > p) would otherwise produce long
        // runs of blank lines when all three closing tags are converted above.
        $text = preg_replace('/\n{3,}/', "\n\n", $text);

        $this->articleBody = trim($text);
    }

    /**
     * Set the canonical URL of the article.
     *
     * @param string $url The article URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the keywords or tags associated with the article.
     *
     * @param string $keywords Comma-separated keywords.
     * @return void
     */
    public function keywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * An Article is considered empty without a headline, as it is the primary
     * identifying field for article-type structured data.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->headline === null;
    }

    /**
     * Build and return the spatie/schema-org Article object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        return $this->populateSpatieArticle(Schema::article());
    }

    /**
     * Populate any spatie article-compatible object with the properties set on
     * this instance. Accepting the spatie object as a parameter rather than
     * creating it internally lets sub-types (NewsArticle, BlogPosting) pass in
     * their own spatie type and get all base property assignments for free.
     *
     * @param mixed $article A spatie object that implements the Article contract.
     * @return mixed The same object, fully populated with non-null properties.
     */
    protected function populateSpatieArticle(mixed $article): mixed
    {
        if ($this->headline !== null) {
            $article->headline($this->headline);
        }

        if ($this->datePublished !== null) {
            $article->datePublished($this->datePublished);
        }

        if ($this->dateModified !== null) {
            $article->dateModified($this->dateModified);
        }

        if ($this->author !== null) {
            // Resolve the AbstractSchema wrapper to its underlying Spatie type,
            // as Spatie's article() method expects a native Spatie object.
            $article->author($this->author->toSpatieObject());
        }

        if ($this->publisher !== null) {
            // Same resolution as author — unwrap before passing to Spatie.
            $article->publisher($this->publisher->toSpatieObject());
        }

        if ($this->image !== null) {
            $article->image($this->image);
        }

        if ($this->description !== null) {
            $article->description($this->description);
        }

        if ($this->articleBody !== null) {
            $article->articleBody($this->articleBody);
        }

        if ($this->url !== null) {
            $article->url($this->url);
        }

        if ($this->keywords !== null) {
            $article->keywords($this->keywords);
        }

        return $article;
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
    protected function formatDate(string $date): string
    {
        $timestamp = strtotime($date);

        return $timestamp !== false ? date('c', $timestamp) : $date;
    }
}
