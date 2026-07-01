<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema\Product;

use Spatie\SchemaOrg\Schema;

/**
 * Represents a Schema.org Vehicle, extending the Product base class to mirror
 * the Schema.org hierarchy where Vehicle is a subtype of Product.
 *
 * Note: spatie's Vehicle class does not extend spatie's Product — it implements
 * ProductContract instead. However, because the method signatures are identical
 * via the contract, passing Schema::vehicle() to populateSpatieProduct() works
 * correctly and all shared product properties are applied without duplication.
 *
 * Named convenience methods are provided for transmission type and drive wheel
 * configuration so callers do not need to know the Schema.org URL values.
 * Mileage is accepted as a plain float with a unit code and assembled into the
 * QuantitativeValue structure that Schema.org requires at output time.
 *
 * @link https://schema.org/Vehicle
 */
class Vehicle extends Product
{
    /**
     * Full Schema.org TransmissionTypeValue URL, or a plain string description.
     *
     * @var string|null
     */
    private ?string $vehicleTransmission = null;

    /**
     * The fuel type of the vehicle (e.g. 'Petrol', 'Electric').
     *
     * @var string|null
     */
    private ?string $fuelType = null;

    /**
     * Numeric odometer reading, stored separately from the unit code.
     *
     * @var float|null
     */
    private ?float $mileageValue = null;

    /**
     * UN/CEFACT unit code for the odometer reading: 'KMT' for kilometres, 'SMI' for miles.
     *
     * @var string
     */
    private string $mileageUnit = 'KMT';

    /**
     * The number of doors on the vehicle.
     *
     * @var int|null
     */
    private ?int $numberOfDoors = null;

    /**
     * The seating capacity of the vehicle.
     *
     * @var float|null
     */
    private ?float $vehicleSeatingCapacity = null;

    /**
     * The Vehicle Identification Number (VIN) of the vehicle.
     *
     * @var string|null
     */
    private ?string $vehicleIdentificationNumber = null;

    /**
     * Model year of the vehicle, typically a four-digit string.
     *
     * @var string|null
     */
    private ?string $vehicleModelDate = null;

    /**
     * The date the vehicle was first registered.
     *
     * @var string|null
     */
    private ?string $dateVehicleFirstRegistered = null;

    /**
     * Full Schema.org DriveWheelConfigurationValue URL, or a plain string description.
     *
     * @var string|null
     */
    private ?string $driveWheelConfiguration = null;

    /**
     * The body style or type of the vehicle (e.g. 'Hatchback', 'SUV').
     *
     * @var string|null
     */
    private ?string $bodyType = null;

    /**
     * Sets the vehicle transmission type to an arbitrary value. Use
     * automaticTransmission() or manualTransmission() for the standard
     * Schema.org enumeration values.
     *
     * @param string $transmission A Schema.org URL or plain text description.
     * @return void
     */
    public function vehicleTransmission(string $transmission): void
    {
        $this->vehicleTransmission = $transmission;
    }

    /**
     * Sets the transmission type to https://schema.org/AutomaticTransmission.
     *
     * @return void
     */
    public function automaticTransmission(): void
    {
        $this->vehicleTransmission = 'https://schema.org/AutomaticTransmission';
    }

    /**
     * Sets the transmission type to https://schema.org/ManualTransmission.
     *
     * @return void
     */
    public function manualTransmission(): void
    {
        $this->vehicleTransmission = 'https://schema.org/ManualTransmission';
    }

    /**
     * Set the fuel type of the vehicle.
     *
     * @param string $fuelType The fuel type (e.g. 'Petrol', 'Electric').
     * @return void
     */
    public function fuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    /**
     * Sets the odometer reading. The value and unit are stored separately and
     * assembled into a QuantitativeValue block at output time — callers do not
     * need to construct that structure directly.
     *
     * @param float  $value Odometer reading.
     * @param string $unit  UN/CEFACT unit code: 'KMT' for kilometres (default), 'SMI' for miles.
     * @return void
     */
    public function mileage(float $value, string $unit = 'KMT'): void
    {
        $this->mileageValue = $value;
        $this->mileageUnit = $unit;
    }

    /**
     * Set the number of doors on the vehicle.
     *
     * @param int $doors The number of doors.
     * @return void
     */
    public function numberOfDoors(int $doors): void
    {
        $this->numberOfDoors = $doors;
    }

    /**
     * Set the seating capacity of the vehicle.
     *
     * @param float $capacity The number of seats.
     * @return void
     */
    public function vehicleSeatingCapacity(float $capacity): void
    {
        $this->vehicleSeatingCapacity = $capacity;
    }

    /**
     * Set the Vehicle Identification Number (VIN).
     *
     * @param string $vin The VIN string.
     * @return void
     */
    public function vehicleIdentificationNumber(string $vin): void
    {
        $this->vehicleIdentificationNumber = $vin;
    }

    /**
     * Set the model year of the vehicle.
     *
     * @param string $date The model year, typically a four-digit string.
     * @return void
     */
    public function vehicleModelDate(string $date): void
    {
        $this->vehicleModelDate = $date;
    }

    /**
     * Set the date the vehicle was first registered.
     *
     * @param string $date The first registration date.
     * @return void
     */
    public function dateVehicleFirstRegistered(string $date): void
    {
        $this->dateVehicleFirstRegistered = $date;
    }

    /**
     * Sets the drive wheel configuration to an arbitrary value. Use
     * allWheelDrive(), fourWheelDrive(), frontWheelDrive(), or
     * rearWheelDrive() for the standard Schema.org enumeration values.
     *
     * @param string $config A Schema.org URL or plain text description.
     * @return void
     */
    public function driveWheelConfiguration(string $config): void
    {
        $this->driveWheelConfiguration = $config;
    }

    /**
     * Sets the drive wheel configuration to https://schema.org/AllWheelDriveConfiguration.
     *
     * @return void
     */
    public function allWheelDrive(): void
    {
        $this->driveWheelConfiguration = 'https://schema.org/AllWheelDriveConfiguration';
    }

    /**
     * Sets the drive wheel configuration to https://schema.org/FourWheelDriveConfiguration.
     *
     * @return void
     */
    public function fourWheelDrive(): void
    {
        $this->driveWheelConfiguration = 'https://schema.org/FourWheelDriveConfiguration';
    }

    /**
     * Sets the drive wheel configuration to https://schema.org/FrontWheelDriveConfiguration.
     *
     * @return void
     */
    public function frontWheelDrive(): void
    {
        $this->driveWheelConfiguration = 'https://schema.org/FrontWheelDriveConfiguration';
    }

    /**
     * Sets the drive wheel configuration to https://schema.org/RearWheelDriveConfiguration.
     *
     * @return void
     */
    public function rearWheelDrive(): void
    {
        $this->driveWheelConfiguration = 'https://schema.org/RearWheelDriveConfiguration';
    }

    /**
     * Set the body style or type of the vehicle.
     *
     * @param string $bodyType The body type (e.g. 'Hatchback', 'SUV').
     * @return void
     */
    public function bodyType(string $bodyType): void
    {
        $this->bodyType = $bodyType;
    }

    /**
     * Returns true when no name has been set, which is treated as the minimum
     * signal that this vehicle has not been meaningfully populated.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Builds and returns the spatie Vehicle object with all properties applied.
     * Shared product properties are populated first via populateSpatieProduct(),
     * then vehicle-specific properties are applied on top.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        // Populate all inherited Product properties onto a spatie Vehicle
        // object. This works because spatie's Vehicle implements ProductContract
        // and exposes the same method signatures as spatie's Product.
        $vehicle = $this->populateSpatieProduct(Schema::vehicle());

        if ($this->vehicleTransmission !== null) {
            $vehicle->vehicleTransmission($this->vehicleTransmission);
        }

        if ($this->fuelType !== null) {
            $vehicle->fuelType($this->fuelType);
        }

        // Mileage is stored as a scalar + unit code. Schema.org requires a
        // QuantitativeValue object, so assemble it here rather than burdening
        // the caller with that knowledge.
        if ($this->mileageValue !== null) {
            $vehicle->mileageFromOdometer(
                Schema::quantitativeValue()
                    ->value($this->mileageValue)
                    ->unitCode($this->mileageUnit)
            );
        }

        if ($this->numberOfDoors !== null) {
            $vehicle->numberOfDoors($this->numberOfDoors);
        }

        if ($this->vehicleSeatingCapacity !== null) {
            $vehicle->vehicleSeatingCapacity($this->vehicleSeatingCapacity);
        }

        if ($this->vehicleIdentificationNumber !== null) {
            $vehicle->vehicleIdentificationNumber($this->vehicleIdentificationNumber);
        }

        if ($this->vehicleModelDate !== null) {
            $vehicle->vehicleModelDate($this->vehicleModelDate);
        }

        if ($this->dateVehicleFirstRegistered !== null) {
            $vehicle->dateVehicleFirstRegistered($this->dateVehicleFirstRegistered);
        }

        if ($this->driveWheelConfiguration !== null) {
            $vehicle->driveWheelConfiguration($this->driveWheelConfiguration);
        }

        if ($this->bodyType !== null) {
            $vehicle->bodyType($this->bodyType);
        }

        return $vehicle;
    }
}
