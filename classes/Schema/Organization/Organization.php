<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Organization;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org Organization
 *
 * Maps a generic organisation to the Schema.org Organization type. Properties
 * are declared as protected rather than private so that subclasses (such as
 * LocalBusiness) can inherit them without redeclaring identical fields.
 *
 * The core population logic lives in populateSpatieOrganization(), which
 * accepts any Spatie schema object that shares the Organization property set.
 * Subclasses call that method with their own Spatie type (e.g. localBusiness())
 * so that all shared properties are applied without duplication.
 *
 * @link https://schema.org/Organization
 */
class Organization extends AbstractSchema
{
    /**
     * The name of the organisation.
     *
     * @var string|null
     */
    protected ?string $name = null;

    /**
     * The primary URL of the organisation's website.
     *
     * @var string|null
     */
    protected ?string $url = null;

    /**
     * URL of the organisation's logo image.
     *
     * @var string|null
     */
    protected ?string $logo = null;

    /**
     * The main telephone number for the organisation.
     *
     * @var string|null
     */
    protected ?string $telephone = null;

    /**
     * The primary email address for the organisation.
     *
     * @var string|null
     */
    protected ?string $email = null;

    /**
     * External URLs that unambiguously identify this organisation (e.g. social profiles).
     *
     * @var array<int, string>
     */
    protected array $sameAs = [];

    /**
     * An aggregate rating for this organisation. Must be an AggregateRating schema instance.
     *
     * @var AbstractSchema|null
     */
    protected ?AbstractSchema $aggregateRating = null;

    /**
     * A short textual description of the organisation.
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * URL of a representative image of the organisation.
     *
     * @var string|null
     */
    protected ?string $image = null;

    /**
     * The fax number for the organisation.
     *
     * @var string|null
     */
    protected ?string $faxNumber = null;

    /**
     * Set the organisation name.
     *
     * @param string $name The organisation name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set the primary URL of the organisation's website.
     *
     * @param string $url The organisation's website URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the URL of the organisation's logo image.
     *
     * @param string $logo URL of the logo image.
     * @return void
     */
    public function logo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * Set the main telephone number for the organisation.
     *
     * @param string $telephone The organisation's telephone number.
     * @return void
     */
    public function telephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * Set the primary email address for the organisation.
     *
     * @param string $email The organisation's email address.
     * @return void
     */
    public function email(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Set one or more URLs that unambiguously identify this organisation on
     * external platforms (e.g. social media profile URLs, Wikipedia, Wikidata).
     *
     * @param string|array<int, string> $sameAs One URL or an array of URLs.
     * @return void
     */
    public function sameAs(string|array $sameAs): void
    {
        $this->sameAs = (array) $sameAs;
    }

    /**
     * Attach an aggregate rating to this organisation.
     *
     * @param AbstractSchema $aggregateRating An AggregateRating schema instance.
     * @return void
     */
    public function aggregateRating(AbstractSchema $aggregateRating): void
    {
        $this->aggregateRating = $aggregateRating;
    }

    /**
     * Set a short textual description of the organisation.
     *
     * @param string $description The organisation description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the URL of a representative image of the organisation.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Set the fax number for the organisation.
     *
     * @param string $faxNumber The organisation's fax number.
     * @return void
     */
    public function faxNumber(string $faxNumber): void
    {
        $this->faxNumber = $faxNumber;
    }

    /**
     * An Organization is considered empty when it has neither a name nor a URL,
     * as those are the minimum fields needed for a meaningful schema block.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null && $this->url === null;
    }

    /**
     * Build and return the spatie/schema-org Organization object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        return $this->populateSpatieOrganization(Schema::organization());
    }

    /**
     * Apply all set Organization properties onto the given Spatie schema object.
     *
     * Accepts any Spatie type that shares the Organization property surface
     * (e.g. LocalBusiness, Corporation). Subclasses pass their own Spatie type
     * here so that shared properties are populated in one place without
     * duplicating the conditional assignment logic in every subclass.
     *
     * Only non-null / non-empty properties are applied so that the resulting
     * JSON-LD output remains clean.
     *
     * @param mixed $org A Spatie schema object compatible with the Organization property set.
     * @return mixed The same object, with all available properties applied.
     */
    protected function populateSpatieOrganization(mixed $org): mixed
    {
        if ($this->name !== null) {
            $org->name($this->name);
        }

        if ($this->url !== null) {
            $org->url($this->url);
        }

        if ($this->logo !== null) {
            $org->logo($this->logo);
        }

        if ($this->telephone !== null) {
            $org->telephone($this->telephone);
        }

        if ($this->email !== null) {
            $org->email($this->email);
        }

        if ($this->sameAs !== []) {
            $org->sameAs($this->sameAs);
        }

        if ($this->aggregateRating !== null) {
            // Convert the AbstractSchema wrapper to its underlying Spatie object
            // before passing it to the parent, as Spatie expects its own types.
            $org->aggregateRating($this->aggregateRating->toSpatieObject());
        }

        if ($this->description !== null) {
            $org->description($this->description);
        }

        if ($this->image !== null) {
            $org->image($this->image);
        }

        if ($this->faxNumber !== null) {
            $org->faxNumber($this->faxNumber);
        }

        return $org;
    }
}
