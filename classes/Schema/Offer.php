<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Represents a Schema.org Offer, typically nested inside a Product or Vehicle
 * via addOffer(), but can also be registered as a standalone schema.
 *
 * Named convenience methods are provided for all standard Schema.org
 * ItemAvailability values so callers do not need to know the full URLs.
 * Date fields (priceValidUntil, validFrom, validThrough) accept MySQL-style
 * datetime strings and convert them to ISO 8601 format automatically.
 *
 * isEmpty() treats a price of 0.0 as a valid, non-empty offer — only a null
 * price indicates that the offer has not been meaningfully populated.
 *
 * @link https://schema.org/Offer
 */
class Offer extends AbstractSchema
{
    /**
     * The offer price. Null means the offer is empty; 0.0 is a valid free price.
     *
     * @var float|null
     */
    private ?float $price = null;

    /**
     * ISO 4217 currency code for the offer price (e.g. 'GBP').
     *
     * @var string|null
     */
    private ?string $priceCurrency = null;

    /**
     * Full Schema.org ItemAvailability URL indicating stock status.
     *
     * @var string|null
     */
    private ?string $availability = null;

    /**
     * The canonical URL of the offer or product page.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * ISO 8601 date after which the price is no longer valid, converted from input on assignment.
     *
     * @var string|null
     */
    private ?string $priceValidUntil = null;

    /**
     * ISO 8601 date from which the offer becomes valid, converted from input on assignment.
     *
     * @var string|null
     */
    private ?string $validFrom = null;

    /**
     * ISO 8601 date through which the offer remains valid, converted from input on assignment.
     *
     * @var string|null
     */
    private ?string $validThrough = null;

    /**
     * The seller of the offer. Must be an Organization or Person schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    private ?AbstractSchema $seller = null;

    /**
     * Set the offer price.
     *
     * @param float $price The price (0.0 is valid and represents a free offer).
     * @return void
     */
    public function price(float $price): void
    {
        $this->price = $price;
    }

    /**
     * Set the ISO 4217 currency code for the offer price.
     *
     * @param string $currency ISO 4217 currency code (e.g. 'GBP').
     * @return void
     */
    public function priceCurrency(string $currency): void
    {
        $this->priceCurrency = $currency;
    }

    /**
     * Sets the availability to an arbitrary value. Use the named convenience
     * methods (inStock(), outOfStock(), etc.) for standard Schema.org values.
     *
     * @param string $availability A Schema.org ItemAvailability URL.
     * @return void
     */
    public function availability(string $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * Sets the availability to https://schema.org/InStock.
     *
     * @return void
     */
    public function inStock(): void
    {
        $this->availability = 'https://schema.org/InStock';
    }

    /**
     * Sets the availability to https://schema.org/OutOfStock.
     *
     * @return void
     */
    public function outOfStock(): void
    {
        $this->availability = 'https://schema.org/OutOfStock';
    }

    /**
     * Sets the availability to https://schema.org/PreOrder.
     *
     * @return void
     */
    public function preOrder(): void
    {
        $this->availability = 'https://schema.org/PreOrder';
    }

    /**
     * Sets the availability to https://schema.org/Discontinued.
     *
     * @return void
     */
    public function discontinued(): void
    {
        $this->availability = 'https://schema.org/Discontinued';
    }

    /**
     * Sets the availability to https://schema.org/LimitedAvailability.
     *
     * @return void
     */
    public function limitedAvailability(): void
    {
        $this->availability = 'https://schema.org/LimitedAvailability';
    }

    /**
     * Sets the availability to https://schema.org/OnlineOnly.
     *
     * @return void
     */
    public function onlineOnly(): void
    {
        $this->availability = 'https://schema.org/OnlineOnly';
    }

    /**
     * Sets the availability to https://schema.org/InStoreOnly.
     *
     * @return void
     */
    public function inStoreOnly(): void
    {
        $this->availability = 'https://schema.org/InStoreOnly';
    }

    /**
     * Sets the availability to https://schema.org/SoldOut.
     *
     * @return void
     */
    public function soldOut(): void
    {
        $this->availability = 'https://schema.org/SoldOut';
    }

    /**
     * Set the canonical URL of the offer or product page.
     *
     * @param string $url The offer URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Sets the date after which the price is no longer valid. Accepts a MySQL
     * datetime string or any format recognised by strtotime(); converts to
     * ISO 8601 automatically.
     *
     * @param string $date Date string in MySQL format or any strtotime()-compatible format.
     * @return void
     */
    public function priceValidUntil(string $date): void
    {
        $this->priceValidUntil = $this->formatDate($date);
    }

    /**
     * Sets the date from which the offer is valid. Accepts a MySQL datetime
     * string or any format recognised by strtotime(); converts to ISO 8601
     * automatically.
     *
     * @param string $date Date string in MySQL format or any strtotime()-compatible format.
     * @return void
     */
    public function validFrom(string $date): void
    {
        $this->validFrom = $this->formatDate($date);
    }

    /**
     * Sets the date through which the offer is valid. Accepts a MySQL datetime
     * string or any format recognised by strtotime(); converts to ISO 8601
     * automatically.
     *
     * @param string $date Date string in MySQL format or any strtotime()-compatible format.
     * @return void
     */
    public function validThrough(string $date): void
    {
        $this->validThrough = $this->formatDate($date);
    }

    /**
     * Sets the seller of the offer.
     *
     * @param AbstractSchema $seller An Organization or Person schema instance. Plain strings are not valid.
     * @return void
     */
    public function seller(AbstractSchema $seller): void
    {
        $this->seller = $seller;
    }

    /**
     * Returns true only when price is null. A price of 0.0 (free) is a valid,
     * non-empty offer and must not be treated as empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->price === null;
    }

    /**
     * Build and return the spatie/schema-org Offer object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $offer = Schema::offer();

        if ($this->price !== null) {
            $offer->price($this->price);
        }

        if ($this->priceCurrency !== null) {
            $offer->priceCurrency($this->priceCurrency);
        }

        if ($this->availability !== null) {
            $offer->availability($this->availability);
        }

        if ($this->url !== null) {
            $offer->url($this->url);
        }

        if ($this->priceValidUntil !== null) {
            $offer->priceValidUntil($this->priceValidUntil);
        }

        if ($this->validFrom !== null) {
            $offer->validFrom($this->validFrom);
        }

        if ($this->validThrough !== null) {
            $offer->validThrough($this->validThrough);
        }

        if ($this->seller !== null) {
            $offer->seller($this->seller->toSpatieObject());
        }

        return $offer;
    }

    /**
     * Converts a date string to ISO 8601 format. Handles MySQL datetime strings
     * (e.g. '2025-06-01 00:00:00') as well as any other format that strtotime()
     * can parse. If parsing fails, the original string is returned unchanged so
     * that a bad value does not silently produce an empty field.
     *
     * @param string $date Input date string.
     * @return string ISO 8601 formatted date, or the original string if parsing fails.
     */
    private function formatDate(string $date): string
    {
        $timestamp = strtotime($date);

        return $timestamp !== false ? date('c', $timestamp) : $date;
    }
}
