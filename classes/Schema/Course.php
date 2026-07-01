<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Represents a Schema.org Course, intended for training and educational content
 * such as instructor-led courses, online programmes, and workshops.
 *
 * The provider property must be an Organization or Person schema instance.
 * Plain strings are not accepted — schema.org does not allow text values for
 * this property. coursePrerequisites and teaches are accepted as plain strings;
 * the Schema.org spec also allows AlignmentObjects or Course references, but
 * plain text covers the vast majority of practical cases.
 *
 * @link https://schema.org/Course
 */
class Course extends AbstractSchema
{
    /**
     * The name or title of the course.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * A short textual description of the course and what it covers.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * The canonical URL of the course's information page.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * URL of a representative image for the course.
     *
     * @var string|null
     */
    private ?string $image = null;

    /**
     * An identifier used by the provider to refer to this course internally.
     *
     * @var string|null
     */
    private ?string $courseCode = null;

    /**
     * The organisation or person responsible for offering the course. Must be an
     * Organization or Person schema instance. Plain strings are not valid —
     * schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    private ?AbstractSchema $provider = null;

    /**
     * Description of the credential or certificate awarded on completion.
     *
     * @var string|null
     */
    private ?string $educationalCredentialAwarded = null;

    /**
     * BCP 47 language tag describing the language the course is taught in (e.g. 'en-GB').
     *
     * @var string|null
     */
    private ?string $inLanguage = null;

    /**
     * Comma-separated or free-text keywords describing the course subject matter.
     *
     * @var string|null
     */
    private ?string $keywords = null;

    /**
     * Plain text description of what the course teaches. Schema.org also permits
     * AlignmentObjects or Course references, but plain text covers most practical cases.
     *
     * @var string|null
     */
    private ?string $teaches = null;

    /**
     * Plain text description of any prerequisites for the course. Schema.org also
     * permits AlignmentObjects or Course references, but plain text covers most practical cases.
     *
     * @var string|null
     */
    private ?string $coursePrerequisites = null;

    /**
     * Set the name or title of the course.
     *
     * @param string $name The course name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set a short textual description of the course.
     *
     * @param string $description The course description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the canonical URL of the course's information page.
     *
     * @param string $url The course URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the URL of a representative image for the course.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Set the provider's internal identifier for this course.
     *
     * @param string $courseCode The course code or identifier.
     * @return void
     */
    public function courseCode(string $courseCode): void
    {
        $this->courseCode = $courseCode;
    }

    /**
     * Sets the organisation or person responsible for offering the course.
     *
     * @param AbstractSchema $provider An Organization or Person schema instance. Plain strings are not valid.
     * @return void
     */
    public function provider(AbstractSchema $provider): void
    {
        $this->provider = $provider;
    }

    /**
     * Set the description of the credential or certificate awarded on completion.
     *
     * @param string $credential Description of the credential awarded.
     * @return void
     */
    public function educationalCredentialAwarded(string $credential): void
    {
        $this->educationalCredentialAwarded = $credential;
    }

    /**
     * Set the BCP 47 language tag for the language the course is taught in.
     *
     * @param string $language BCP 47 language tag (e.g. 'en-GB').
     * @return void
     */
    public function inLanguage(string $language): void
    {
        $this->inLanguage = $language;
    }

    /**
     * Set the keywords or tags describing the course subject matter.
     *
     * @param string $keywords Comma-separated keywords.
     * @return void
     */
    public function keywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * Sets a plain text description of what the course teaches. Schema.org also
     * permits AlignmentObjects or Course references, but this implementation
     * accepts a string to cover the most common use case.
     *
     * @param string $teaches Description of the skills or knowledge taught.
     * @return void
     */
    public function teaches(string $teaches): void
    {
        $this->teaches = $teaches;
    }

    /**
     * Sets a plain text description of any prerequisites for the course.
     * Schema.org also permits AlignmentObjects or Course references, but this
     * implementation accepts a string to cover the most common use case.
     *
     * @param string $prerequisites Description of what learners should already know.
     * @return void
     */
    public function coursePrerequisites(string $prerequisites): void
    {
        $this->coursePrerequisites = $prerequisites;
    }

    /**
     * Returns true when no name has been set, which is treated as the minimum
     * signal that this course has not been meaningfully populated.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org Course object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $course = Schema::course();

        if ($this->name !== null) {
            $course->name($this->name);
        }

        if ($this->description !== null) {
            $course->description($this->description);
        }

        if ($this->url !== null) {
            $course->url($this->url);
        }

        if ($this->image !== null) {
            $course->image($this->image);
        }

        if ($this->courseCode !== null) {
            $course->courseCode($this->courseCode);
        }

        if ($this->provider !== null) {
            $course->provider($this->provider->toSpatieObject());
        }

        if ($this->educationalCredentialAwarded !== null) {
            $course->educationalCredentialAwarded($this->educationalCredentialAwarded);
        }

        if ($this->inLanguage !== null) {
            $course->inLanguage($this->inLanguage);
        }

        if ($this->keywords !== null) {
            $course->keywords($this->keywords);
        }

        if ($this->teaches !== null) {
            $course->teaches($this->teaches);
        }

        if ($this->coursePrerequisites !== null) {
            $course->coursePrerequisites($this->coursePrerequisites);
        }

        return $course;
    }
}
