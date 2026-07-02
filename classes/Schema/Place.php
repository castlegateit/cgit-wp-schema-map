<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org Place
 *
 * Represents a physical or conceptual location. Useful both as a standalone
 * schema block and as the location value on an Event (via Event::location()).
 *
 * Address components are stored individually and assembled into a nested
 * PostalAddress object at output time, emitted only when at least one component
 * is present. Latitude and longitude are assembled into a nested GeoCoordinates
 * object, emitted only when both values are present (a single coordinate is not
 * meaningful to search engines).
 *
 * @link https://schema.org/Place
 */
class Place extends AbstractSchema
{
    /**
     * The name of the place or venue.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * A short textual description of the place.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * The canonical URL for the place's information page.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * The telephone number for the place.
     *
     * @var string|null
     */
    private ?string $telephone = null;

    /**
     * The street address component of the place's postal address.
     *
     * @var string|null
     */
    private ?string $streetAddress = null;

    /**
     * Town, city, or other locality component of the address.
     *
     * @var string|null
     */
    private ?string $addressLocality = null;

    /**
     * Postcode or ZIP code component of the address.
     *
     * @var string|null
     */
    private ?string $postalCode = null;

    /**
     * ISO 3166-1 alpha-2 country code (e.g. 'GB').
     *
     * @var string|null
     */
    private ?string $addressCountry = null;

    /**
     * Decimal degrees latitude for the place's geographic position.
     *
     * @var float|null
     */
    private ?float $latitude = null;

    /**
     * Decimal degrees longitude for the place's geographic position.
     *
     * @var float|null
     */
    private ?float $longitude = null;

    /**
     * Opening hours as an array of strings in OpeningHoursSpecification format,
     * e.g. ['Mo-Fr 09:00-17:00', 'Sa 09:00-13:00'].
     *
     * @var array<int, string>
     */
    private array $openingHours = [];

    /**
     * Set the name of the place or venue.
     *
     * @param string $name The place name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set a short textual description of the place.
     *
     * @param string $description The place description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the canonical URL for the place's information page.
     *
     * @param string $url The place URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the telephone number for the place.
     *
     * @param string $telephone The place telephone number.
     * @return void
     */
    public function telephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * Set the street address of the place.
     *
     * @param string $streetAddress The street address.
     * @return void
     */
    public function streetAddress(string $streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * Set the town, city, or locality component of the address.
     *
     * @param string $addressLocality The locality name.
     * @return void
     */
    public function addressLocality(string $addressLocality): void
    {
        $this->addressLocality = $addressLocality;
    }

    /**
     * Set the postcode or ZIP code of the address.
     *
     * @param string $postalCode The postcode or ZIP code.
     * @return void
     */
    public function postalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Set the country using an ISO 3166-1 alpha-2 code (e.g. 'GB', 'US').
     *
     * @param string $addressCountry Two-letter country code.
     * @return void
     */
    public function addressCountry(string $addressCountry): void
    {
        $this->addressCountry = $addressCountry;
    }

    /**
     * Set the geographic coordinates. Both values are required; a partial geo
     * is omitted at output time.
     *
     * @param float $latitude  Decimal degrees latitude.
     * @param float $longitude Decimal degrees longitude.
     * @return void
     */
    public function geo(float $latitude, float $longitude): void
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * Set the opening hours for this place.
     *
     * @param array<int, string> $hours Opening hours strings, e.g. ['Mo-Fr 09:00-17:00'].
     * @return void
     */
    public function openingHours(array $hours): void
    {
        $this->openingHours = $hours;
    }

    /**
     * A Place is considered empty when no name has been set.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org Place object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $place = Schema::place();

        if ($this->name !== null) {
            $place->name($this->name);
        }

        if ($this->description !== null) {
            $place->description($this->description);
        }

        if ($this->url !== null) {
            $place->url($this->url);
        }

        if ($this->telephone !== null) {
            $place->telephone($this->telephone);
        }

        // Assemble address components into a nested PostalAddress only when at
        // least one component has been set. An empty PostalAddress would produce
        // meaningless structured data and should be omitted entirely.
        if ($this->streetAddress !== null || $this->addressLocality !== null || $this->postalCode !== null || $this->addressCountry !== null) {
            $address = Schema::postalAddress();

            if ($this->streetAddress !== null) {
                $address->streetAddress($this->streetAddress);
            }

            if ($this->addressLocality !== null) {
                $address->addressLocality($this->addressLocality);
            }

            if ($this->postalCode !== null) {
                $address->postalCode($this->postalCode);
            }

            if ($this->addressCountry !== null) {
                $address->addressCountry($this->addressCountry);
            }

            $place->address($address);
        }

        // Geo requires both coordinates to be meaningful. Emit only when both
        // latitude and longitude have been set via geo().
        if ($this->latitude !== null && $this->longitude !== null) {
            $place->geo(
                Schema::geoCoordinates()
                    ->latitude($this->latitude)
                    ->longitude($this->longitude)
            );
        }

        if (!empty($this->openingHours)) {
            $place->openingHours($this->openingHours);
        }

        return $place;
    }
}
