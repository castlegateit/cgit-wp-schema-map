<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org Person
 *
 * Maps an individual (team member, post author, reviewer) to the Schema.org
 * Person type. The worksFor property must be an Organization schema instance —
 * plain strings are not accepted, as schema.org does not allow text values for
 * this property.
 *
 * The telephone property here represents the individual's direct line, and is
 * distinct from the telephone on an Organization or LocalBusiness schema, which
 * represents the organisation's main contact number.
 *
 * @link https://schema.org/Person
 */
class Person extends AbstractSchema
{
    /**
     * The full name of the person.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The person's job title or role within their organisation.
     *
     * @var string|null
     */
    private ?string $jobTitle = null;

    /**
     * URL of a headshot or representative image of the person.
     *
     * @var string|null
     */
    private ?string $image = null;

    /**
     * The person's email address.
     *
     * @var string|null
     */
    private ?string $email = null;

    /**
     * The canonical URL of the person's profile or personal website.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * External URLs that unambiguously identify this person (e.g. social profiles, ORCID).
     *
     * @var array<int, string>
     */
    private array $sameAs = [];

    /**
     * The organisation this person works for. Must be an Organization schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    private ?AbstractSchema $worksFor = null;

    /**
     * A short textual description of the person.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * The individual's direct telephone number. This is distinct from the
     * telephone on an Organisation schema, which is the organisation's main line.
     *
     * @var string|null
     */
    private ?string $telephone = null;

    /**
     * Set the full name of the person.
     *
     * @param string $name The person's full name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set the person's job title or role within their organisation.
     *
     * @param string $jobTitle The job title.
     * @return void
     */
    public function jobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * Set the URL of a headshot or representative image of the person.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Set the person's email address.
     *
     * @param string $email The email address.
     * @return void
     */
    public function email(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Set the canonical URL of the person's profile or personal website.
     *
     * @param string $url The person's URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set one or more URLs that unambiguously identify this person on external
     * platforms (e.g. social media profiles, Wikipedia, ORCID).
     *
     * @param string|array<int, string> $sameAs One URL or an array of URLs.
     * @return void
     */
    public function sameAs(string|array $sameAs): void
    {
        $this->sameAs = (array) $sameAs;
    }

    /**
     * Set the organisation this person works for.
     *
     * @param AbstractSchema $worksFor An Organization schema instance. Plain strings are not valid.
     * @return void
     */
    public function worksFor(AbstractSchema $worksFor): void
    {
        $this->worksFor = $worksFor;
    }

    /**
     * Set a short textual description of the person.
     *
     * @param string $description The person's description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the individual's direct telephone number.
     *
     * @param string $telephone The person's direct line, not the organisation's main number.
     * @return void
     */
    public function telephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * A Person is considered empty without a name, as it is the minimum field
     * needed to produce meaningful structured data.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org Person object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $person = Schema::person();

        if ($this->name !== null) {
            $person->name($this->name);
        }

        if ($this->jobTitle !== null) {
            $person->jobTitle($this->jobTitle);
        }

        if ($this->image !== null) {
            $person->image($this->image);
        }

        if ($this->email !== null) {
            $person->email($this->email);
        }

        if ($this->url !== null) {
            $person->url($this->url);
        }

        if ($this->sameAs !== []) {
            $person->sameAs($this->sameAs);
        }

        if ($this->worksFor !== null) {
            // Resolve the AbstractSchema wrapper to its underlying Spatie type
            // before passing it to Spatie's person() schema object.
            $person->worksFor($this->worksFor->toSpatieObject());
        }

        if ($this->description !== null) {
            $person->description($this->description);
        }

        if ($this->telephone !== null) {
            $person->telephone($this->telephone);
        }

        return $person;
    }
}
