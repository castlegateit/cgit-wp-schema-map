<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Organization;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org LocalBusiness
 *
 * Extends Organization to represent a physical or service-area business,
 * mirroring the Schema.org hierarchy where LocalBusiness is a subtype of
 * Organization. Inherits all Organization properties and adds address
 * (decomposed into street/locality/postal code/country), geographical
 * coordinates, opening hours, price range, and customer reviews.
 *
 * The postal address is assembled into a nested PostalAddress block and is
 * only emitted when at least one address component has been set. Geo
 * coordinates are only emitted when both latitude and longitude are present.
 *
 * The core population logic lives in populateSpatieLocalBusiness(), which
 * accepts any Spatie schema object that shares the LocalBusiness property set.
 * Sub-types (e.g. FoodEstablishment) call that method with their own Spatie
 * type so that all shared properties are applied without duplication.
 *
 * @link https://schema.org/LocalBusiness
 */
class LocalBusiness extends Organization
{
    /**
     * The first line of the postal address (street and building number).
     *
     * @var string|null
     */
    private ?string $streetAddress = null;

    /**
     * The town, city, or other locality of the address.
     *
     * @var string|null
     */
    private ?string $addressLocality = null;

    /**
     * The postal code (postcode) of the address.
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
     * Decimal degrees latitude. Only emitted when longitude is also set.
     *
     * @var float|null
     */
    private ?float $latitude = null;

    /**
     * Decimal degrees longitude. Only emitted when latitude is also set.
     *
     * @var float|null
     */
    private ?float $longitude = null;

    /**
     * Opening hours strings in Schema.org format, e.g. ['Mo-Fr 09:00-17:00'].
     *
     * @var array<int, string>
     */
    private array $openingHours = [];

    /**
     * Short human-readable price range indicator, e.g. '££' or '$10–$20'.
     *
     * @var string|null
     */
    private ?string $priceRange = null;

    /**
     * Individual customer review schema instances to be nested in the output.
     *
     * @var array<int, AbstractSchema>
     */
    private array $reviews = [];

    /**
     * Set the first line of the postal address.
     *
     * @param string $address Street address and building number.
     * @return void
     */
    public function streetAddress(string $address): void
    {
        $this->streetAddress = $address;
    }

    /**
     * Set the town, city, or other locality of the address.
     *
     * @param string $locality Locality name.
     * @return void
     */
    public function addressLocality(string $locality): void
    {
        $this->addressLocality = $locality;
    }

    /**
     * Set the postal code of the address.
     *
     * @param string $postalCode Postcode or ZIP code.
     * @return void
     */
    public function postalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Set the country using an ISO 3166-1 alpha-2 code (e.g. 'GB', 'US').
     *
     * @param string $country Two-letter ISO country code.
     * @return void
     */
    public function addressCountry(string $country): void
    {
        $this->addressCountry = $country;
    }

    /**
     * Set the geographical coordinates of the business location. Both values
     * must be provided; if only one is set the geo block will not be emitted.
     *
     * @param float $lat Latitude in decimal degrees.
     * @param float $lng Longitude in decimal degrees.
     * @return void
     */
    public function geo(float $lat, float $lng): void
    {
        $this->latitude = $lat;
        $this->longitude = $lng;
    }

    /**
     * Set the opening hours for the business.
     *
     * Each entry should follow the Schema.org openingHours specification, e.g.
     * 'Mo-Fr 09:00-17:00' or 'Sa 10:00-14:00'.
     *
     * @param array<int, string> $hours An array of opening hours strings.
     * @return void
     */
    public function openingHours(array $hours): void
    {
        $this->openingHours = $hours;
    }

    /**
     * Set a short, human-readable description of the price range, e.g. '££' or
     * '$10–$20'.
     *
     * @param string $priceRange The price range description.
     * @return void
     */
    public function priceRange(string $priceRange): void
    {
        $this->priceRange = $priceRange;
    }

    /**
     * Add an individual customer review to the business listing.
     *
     * Reviews are accumulated and all emitted together in the final output.
     *
     * @param AbstractSchema $review A Review schema instance.
     * @return void
     */
    public function addReview(AbstractSchema $review): void
    {
        $this->reviews[] = $review;
    }

    /**
     * A LocalBusiness is considered empty without a name, as a business name
     * is the minimum meaningful identifier (unlike the parent Organization,
     * which can be identified by URL alone).
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie LocalBusiness object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        return $this->populateSpatieLocalBusiness(Schema::localBusiness());
    }

    /**
     * Apply all set LocalBusiness properties onto the given Spatie schema object.
     *
     * First delegates to populateSpatieOrganization() to apply inherited
     * Organization properties, then applies LocalBusiness-specific properties
     * on top. Accepts any Spatie type that shares the LocalBusiness property
     * surface (e.g. FoodEstablishment) so that sub-types can pass their own
     * Spatie type without duplicating the population logic.
     *
     * @param mixed $business A Spatie schema object compatible with the LocalBusiness property set.
     * @return mixed The same object, with all available properties applied.
     */
    protected function populateSpatieLocalBusiness(mixed $business): mixed
    {
        // Apply all inherited Organization properties first.
        $business = $this->populateSpatieOrganization($business);

        // The address block is only emitted when at least one component is set,
        // so that an empty PostalAddress object is never added to the output.
        $hasAddress = $this->streetAddress !== null
            || $this->addressLocality !== null
            || $this->postalCode !== null
            || $this->addressCountry !== null;

        if ($hasAddress) {
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

            $business->address($address);
        }

        // Both values are required to form a valid GeoCoordinates block; a
        // lone latitude or longitude would produce meaningless structured data.
        if ($this->latitude !== null && $this->longitude !== null) {
            $business->geo(
                Schema::geoCoordinates()
                    ->latitude($this->latitude)
                    ->longitude($this->longitude)
            );
        }

        if ($this->openingHours !== []) {
            $business->openingHours($this->openingHours);
        }

        if ($this->priceRange !== null) {
            $business->priceRange($this->priceRange);
        }

        if ($this->reviews !== []) {
            // Convert each AbstractSchema review wrapper to its Spatie equivalent
            // before passing the array to Spatie, which expects its own types.
            $business->review(array_map(fn($r) => $r->toSpatieObject(), $this->reviews));
        }

        return $business;
    }
}
