<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Schema.org DefinedTerm
 *
 * Represents a word, name, acronym, phrase, or term defined in a controlled
 * vocabulary or definition list. Useful for glossaries, taxonomies, and
 * structured educational content.
 *
 * The inDefinedTermSet property accepts a URL string pointing to the vocabulary
 * that defines this term. Schema.org also accepts a full DefinedTermSet object,
 * but a URL string covers the common case of referencing an external taxonomy.
 *
 * @link https://schema.org/DefinedTerm
 */
class DefinedTerm extends AbstractSchema
{
    /**
     * The word, phrase, or acronym that this term defines.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * A human-readable definition or explanation of the term.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * The canonical URL of the term's definition page or entry.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * A short code or identifier for this term within its vocabulary.
     *
     * @var string|null
     */
    private ?string $termCode = null;

    /**
     * URL of the DefinedTermSet (vocabulary or taxonomy) in which this term is defined.
     *
     * @var string|null
     */
    private ?string $inDefinedTermSet = null;

    /**
     * Set the word, phrase, or acronym that this term defines.
     *
     * @param string $name The term name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set a human-readable definition or explanation of the term.
     *
     * @param string $description The term definition.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the canonical URL of the term's definition page or entry.
     *
     * @param string $url The term URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set a short code or identifier for this term within its vocabulary.
     *
     * @param string $termCode The term identifier (e.g. "SNOMED:123456").
     * @return void
     */
    public function termCode(string $termCode): void
    {
        $this->termCode = $termCode;
    }

    /**
     * Set the vocabulary or controlled list this term belongs to. Accepts a URL
     * pointing to the DefinedTermSet. Schema.org also permits a DefinedTermSet
     * object, but a URL covers the common case of referencing an external
     * taxonomy or schema registry.
     *
     * @param string $url URL of the DefinedTermSet.
     * @return void
     */
    public function inDefinedTermSet(string $url): void
    {
        $this->inDefinedTermSet = $url;
    }

    /**
     * A DefinedTerm is considered empty when no name has been set.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org DefinedTerm object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $term = Schema::definedTerm();

        if ($this->name !== null) {
            $term->name($this->name);
        }

        if ($this->description !== null) {
            $term->description($this->description);
        }

        if ($this->url !== null) {
            $term->url($this->url);
        }

        if ($this->termCode !== null) {
            $term->termCode($this->termCode);
        }

        if ($this->inDefinedTermSet !== null) {
            $term->inDefinedTermSet($this->inDefinedTermSet);
        }

        return $term;
    }
}
