<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Product;

use Castlegate\SchemaMap\AbstractSchema;
use Spatie\SchemaOrg\Schema;

/**
 * Represents a Schema.org Product and acts as the base class for all
 * product-type schemas in this plugin, including Vehicle. Properties are
 * declared protected rather than private so that subclasses can inherit
 * them and have them populated via populateSpatieProduct().
 *
 * Brand is stored internally as a plain string and only wrapped in a spatie
 * Brand object at output time, because the Schema.org spec requires a Brand
 * entity rather than a bare string. Offers are collected as an array of
 * AbstractSchema instances and converted to spatie objects when toScript() or
 * toSpatieObject() is called.
 *
 * @link https://schema.org/Product
 */
class Product extends AbstractSchema
{
    /**
     * The name of the product.
     *
     * @var string|null
     */
    protected ?string $name = null;

    /**
     * A short textual description of the product.
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * URL of a representative image of the product.
     *
     * @var string|null
     */
    protected ?string $image = null;

    /**
     * The canonical URL of the product's detail page.
     *
     * @var string|null
     */
    protected ?string $url = null;

    /**
     * Plain string brand name; wrapped in a spatie Brand object at output time.
     *
     * @var string|null
     */
    protected ?string $brand = null;

    /**
     * The Stock Keeping Unit identifier for the product.
     *
     * @var string|null
     */
    protected ?string $sku = null;

    /**
     * Global Trade Item Number (GTIN) identifier for the product.
     *
     * @var string|null
     */
    protected ?string $gtin = null;

    /**
     * The colour of the product.
     *
     * @var string|null
     */
    protected ?string $color = null;

    /**
     * The product category or type.
     *
     * @var string|null
     */
    protected ?string $category = null;

    /**
     * The manufacturer of the product. Must be an Organization schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    protected ?AbstractSchema $manufacturer = null;

    /**
     * An aggregate rating for this product. Must be an AggregateRating schema instance.
     *
     * @var AbstractSchema|null
     */
    protected ?AbstractSchema $aggregateRating = null;

    /**
     * One or more Offer schema instances describing pricing and availability.
     *
     * @var AbstractSchema[]
     */
    protected array $offers = [];

    /**
     * Set the product name.
     *
     * @param string $name The product name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set a short textual description of the product.
     *
     * @param string $description The product description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the URL of a representative image of the product.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Set the canonical URL of the product's detail page.
     *
     * @param string $url The product URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the brand name of the product. Stored as a plain string; wrapped in
     * a spatie Brand object at output time.
     *
     * @param string $brand The brand name.
     * @return void
     */
    public function brand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Set the Stock Keeping Unit identifier for the product.
     *
     * @param string $sku The SKU identifier.
     * @return void
     */
    public function sku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * Set the Global Trade Item Number (GTIN) for the product.
     *
     * @param string $gtin The GTIN identifier.
     * @return void
     */
    public function gtin(string $gtin): void
    {
        $this->gtin = $gtin;
    }

    /**
     * Set the colour of the product.
     *
     * @param string $color The product colour.
     * @return void
     */
    public function color(string $color): void
    {
        $this->color = $color;
    }

    /**
     * Set the product category or type.
     *
     * @param string $category The product category.
     * @return void
     */
    public function category(string $category): void
    {
        $this->category = $category;
    }

    /**
     * Sets the manufacturer of the product.
     *
     * @param AbstractSchema $manufacturer An Organization schema instance. Plain strings are not valid.
     * @return void
     */
    public function manufacturer(AbstractSchema $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Sets an aggregate rating for the product.
     *
     * @param AbstractSchema $aggregateRating An AggregateRating schema instance.
     * @return void
     */
    public function aggregateRating(AbstractSchema $aggregateRating): void
    {
        $this->aggregateRating = $aggregateRating;
    }

    /**
     * Appends an offer to the product. Multiple offers can be added; they are
     * all included in the JSON-LD output.
     *
     * @param AbstractSchema $offer An Offer schema instance.
     * @return void
     */
    public function addOffer(AbstractSchema $offer): void
    {
        $this->offers[] = $offer;
    }

    /**
     * Returns true when no name has been set, which is treated as the minimum
     * signal that this product has not been meaningfully populated.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org Product object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        return $this->populateSpatieProduct(Schema::product());
    }

    /**
     * Fills all product properties onto any compatible spatie object. Accepting
     * a mixed $product rather than a concrete type allows Vehicle (and any
     * future subtype) to pass Schema::vehicle() here, since spatie's Vehicle
     * implements ProductContract and has identical method signatures even though
     * it does not extend spatie's Product class.
     *
     * @param mixed $product A spatie schema object implementing ProductContract.
     * @return mixed The same $product object with all non-null properties applied.
     */
    protected function populateSpatieProduct(mixed $product): mixed
    {
        if ($this->name !== null) {
            $product->name($this->name);
        }

        if ($this->description !== null) {
            $product->description($this->description);
        }

        if ($this->image !== null) {
            $product->image($this->image);
        }

        if ($this->url !== null) {
            $product->url($this->url);
        }

        // Brand is stored as a plain string but Schema.org requires a Brand
        // entity, so wrap it here rather than forcing callers to construct one.
        if ($this->brand !== null) {
            $product->brand(Schema::brand()->name($this->brand));
        }

        if ($this->sku !== null) {
            $product->sku($this->sku);
        }

        if ($this->gtin !== null) {
            $product->gtin($this->gtin);
        }

        if ($this->color !== null) {
            $product->color($this->color);
        }

        if ($this->category !== null) {
            $product->category($this->category);
        }

        if ($this->manufacturer !== null) {
            $product->manufacturer($this->manufacturer->toSpatieObject());
        }

        if ($this->aggregateRating !== null) {
            $product->aggregateRating($this->aggregateRating->toSpatieObject());
        }

        // Convert each Offer wrapper to its underlying spatie object before
        // passing the array to spatie, which expects native spatie objects.
        if ($this->offers !== []) {
            $product->offers(array_map(fn($o) => $o->toSpatieObject(), $this->offers));
        }

        return $product;
    }
}
