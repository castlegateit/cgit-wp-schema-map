<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Organization;

use Spatie\SchemaOrg\Schema;

/**
 * Schema.org FoodEstablishment
 *
 * Extends LocalBusiness to represent a restaurant, café, takeaway, or other
 * food-serving venue. All Organization and LocalBusiness properties are
 * inherited and set via the parent class setters.
 *
 * The hasMenu property should be a URL pointing to the menu; acceptsReservations
 * accepts a boolean (true if the venue takes bookings). servesCuisine is a
 * free-text description of the cuisine type(s) offered.
 *
 * @link https://schema.org/FoodEstablishment
 */
class FoodEstablishment extends LocalBusiness
{
    /**
     * Free-text description of the cuisine type(s) served, e.g. 'Italian' or
     * 'Modern British'.
     *
     * @var string|null
     */
    private ?string $servesCuisine = null;

    /**
     * URL pointing to the establishment's menu.
     *
     * @var string|null
     */
    private ?string $hasMenu = null;

    /**
     * Whether the establishment accepts reservations.
     *
     * @var bool|null
     */
    private ?bool $acceptsReservations = null;

    /**
     * Set the cuisine type(s) served by the establishment.
     *
     * @param string $cuisine Free-text cuisine description, e.g. 'Italian'.
     * @return void
     */
    public function servesCuisine(string $cuisine): void
    {
        $this->servesCuisine = $cuisine;
    }

    /**
     * Set the URL for the establishment's menu.
     *
     * @param string $url Fully-qualified URL of the menu page or PDF.
     * @return void
     */
    public function hasMenu(string $url): void
    {
        $this->hasMenu = $url;
    }

    /**
     * Set whether the establishment accepts reservations.
     *
     * @param bool $accepts True if reservations are accepted.
     * @return void
     */
    public function acceptsReservations(bool $accepts): void
    {
        $this->acceptsReservations = $accepts;
    }

    /**
     * Build and return the spatie FoodEstablishment object.
     *
     * Delegates all Organization and LocalBusiness property population to
     * populateSpatieLocalBusiness(), then layers FoodEstablishment-specific
     * properties on top.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $establishment = $this->populateSpatieLocalBusiness(Schema::foodEstablishment());

        if ($this->servesCuisine !== null) {
            $establishment->servesCuisine($this->servesCuisine);
        }

        if ($this->hasMenu !== null) {
            $establishment->hasMenu($this->hasMenu);
        }

        if ($this->acceptsReservations !== null) {
            $establishment->acceptsReservations($this->acceptsReservations);
        }

        return $establishment;
    }
}
