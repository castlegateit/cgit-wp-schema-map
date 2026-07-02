<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org Book
 *
 * Represents a book, e-book, or audiobook. Named convenience methods are
 * provided for common bookFormat values so that developers do not need to know
 * the Schema.org URL strings; the raw bookFormat() setter remains as an escape
 * hatch for less common formats.
 *
 * The author and publisher properties must be a Person or Organization schema
 * instance. Plain strings are not accepted — schema.org does not allow text
 * values for these properties.
 *
 * The datePublished setter accepts MySQL datetime strings and normalises them to
 * ISO 8601 automatically, consistent with other date-bearing schema types in
 * this plugin.
 *
 * @link https://schema.org/Book
 */
class Book extends AbstractSchema
{
    /**
     * The title of the book.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * A short textual description or summary of the book.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * The canonical URL of the book's detail or purchase page.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * URL of the book's cover image or a representative image.
     *
     * @var string|null
     */
    private ?string $image = null;

    /**
     * ISBN-10 or ISBN-13 identifier, with or without hyphens.
     *
     * @var string|null
     */
    private ?string $isbn = null;

    /**
     * Total number of pages in the book.
     *
     * @var int|null
     */
    private ?int $numberOfPages = null;

    /**
     * The author of the book. Must be a Person or Organization schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    private ?AbstractSchema $author = null;

    /**
     * The publisher of the book. Must be an Organization or Person schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    private ?AbstractSchema $publisher = null;

    /**
     * BCP 47 language tag describing the language the book is written in (e.g. 'en-GB').
     *
     * @var string|null
     */
    private ?string $inLanguage = null;

    /**
     * ISO 8601 publication date, normalised from the input string on assignment.
     *
     * @var string|null
     */
    private ?string $datePublished = null;

    /**
     * Full Schema.org BookFormatType URL indicating the format of the book.
     *
     * @var string|null
     */
    private ?string $bookFormat = null;

    /**
     * Set the title of the book.
     *
     * @param string $name The book title.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set a short textual description or summary of the book.
     *
     * @param string $description The book description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the canonical URL of the book's detail or purchase page.
     *
     * @param string $url The book URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the URL of the book's cover image or a representative image.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Set the ISBN identifier (ISBN-10 or ISBN-13, with or without hyphens).
     *
     * @param string $isbn The ISBN string.
     * @return void
     */
    public function isbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * Set the total page count for the book.
     *
     * @param int $numberOfPages Total number of pages.
     * @return void
     */
    public function numberOfPages(int $numberOfPages): void
    {
        $this->numberOfPages = $numberOfPages;
    }

    /**
     * Set the author of the book.
     *
     * @param AbstractSchema $author A Person or Organization schema instance. Plain strings are not valid.
     * @return void
     */
    public function author(AbstractSchema $author): void
    {
        $this->author = $author;
    }

    /**
     * Set the publisher of the book.
     *
     * @param AbstractSchema $publisher An Organization or Person schema instance. Plain strings are not valid.
     * @return void
     */
    public function publisher(AbstractSchema $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * Set the language of the book content as a BCP 47 tag (e.g. 'en-GB').
     *
     * @param string $language BCP 47 language tag.
     * @return void
     */
    public function inLanguage(string $language): void
    {
        $this->inLanguage = $language;
    }

    /**
     * Set the publication date. MySQL datetime strings are accepted and
     * normalised to ISO 8601 automatically.
     *
     * @param string $date A date string parseable by strtotime, or an ISO 8601 string.
     * @return void
     */
    public function datePublished(string $date): void
    {
        $timestamp = strtotime($date);
        $this->datePublished = $timestamp !== false ? date('c', $timestamp) : $date;
    }

    /**
     * Set the book format to an arbitrary Schema.org BookFormatType URL. Use
     * the named convenience methods (hardcover(), paperback(), etc.) for the most
     * common formats.
     *
     * @param string $format A Schema.org BookFormatType URL.
     * @return void
     */
    public function bookFormat(string $format): void
    {
        $this->bookFormat = $format;
    }

    /**
     * Sets the book format to https://schema.org/Hardcover.
     *
     * @return void
     */
    public function hardcover(): void
    {
        $this->bookFormat = 'https://schema.org/Hardcover';
    }

    /**
     * Sets the book format to https://schema.org/Paperback.
     *
     * @return void
     */
    public function paperback(): void
    {
        $this->bookFormat = 'https://schema.org/Paperback';
    }

    /**
     * Sets the book format to https://schema.org/EBook.
     *
     * @return void
     */
    public function ebook(): void
    {
        $this->bookFormat = 'https://schema.org/EBook';
    }

    /**
     * Sets the book format to https://schema.org/AudiobookFormat.
     *
     * @return void
     */
    public function audiobook(): void
    {
        $this->bookFormat = 'https://schema.org/AudiobookFormat';
    }

    /**
     * A Book is considered empty when no name has been set.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org Book object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $book = Schema::book();

        if ($this->name !== null) {
            $book->name($this->name);
        }

        if ($this->description !== null) {
            $book->description($this->description);
        }

        if ($this->url !== null) {
            $book->url($this->url);
        }

        if ($this->image !== null) {
            $book->image($this->image);
        }

        if ($this->isbn !== null) {
            $book->isbn($this->isbn);
        }

        if ($this->numberOfPages !== null) {
            $book->numberOfPages($this->numberOfPages);
        }

        if ($this->author !== null) {
            // Resolve the AbstractSchema wrapper to its underlying Spatie type
            // before passing it to the spatie book object.
            $book->author($this->author->toSpatieObject());
        }

        if ($this->publisher !== null) {
            $book->publisher($this->publisher->toSpatieObject());
        }

        if ($this->inLanguage !== null) {
            $book->inLanguage($this->inLanguage);
        }

        if ($this->datePublished !== null) {
            $book->datePublished($this->datePublished);
        }

        if ($this->bookFormat !== null) {
            $book->bookFormat($this->bookFormat);
        }

        return $book;
    }
}
