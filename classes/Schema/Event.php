<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Represents a Schema.org Event, covering in-person, online, and hybrid
 * gatherings.
 *
 * eventStatus defaults to EventScheduled on construction so that Google's
 * required field is always present without the developer needing to set it
 * explicitly. Named convenience methods are provided for both eventStatus and
 * eventAttendanceMode so callers do not need to know the full Schema.org URLs;
 * the raw setters remain as escape hatches for unusual values.
 *
 * Date fields (startDate, endDate) accept MySQL-style datetime strings and are
 * converted to ISO 8601 format automatically.
 *
 * @link https://schema.org/Event
 */
class Event extends AbstractSchema
{
    /**
     * The name or title of the event.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * ISO 8601 start date, converted from the input string on assignment.
     *
     * @var string|null
     */
    private ?string $startDate = null;

    /**
     * ISO 8601 end date, converted from the input string on assignment.
     *
     * @var string|null
     */
    private ?string $endDate = null;

    /**
     * A short textual description of the event.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * The canonical URL for the event's information page.
     *
     * @var string|null
     */
    private ?string $url = null;

    /**
     * The event location as a venue name string or a Place schema instance.
     *
     * @var string|AbstractSchema|null
     */
    private string|AbstractSchema|null $location = null;

    /**
     * The organiser of the event. Must be an Organization or Person schema instance.
     * Plain strings are not valid — schema.org does not allow text for this property.
     *
     * @var AbstractSchema|null
     */
    private ?AbstractSchema $organizer = null;

    /**
     * URL of a representative image for the event.
     *
     * @var string|null
     */
    private ?string $image = null;

    /**
     * Full Schema.org EventStatusType URL. Defaults to EventScheduled so Google's
     * required field is always populated without the developer having to set it.
     *
     * @var string|null
     */
    private ?string $eventStatus = 'https://schema.org/EventScheduled';

    /**
     * Full Schema.org EventAttendanceModeEnumeration URL.
     *
     * @var string|null
     */
    private ?string $eventAttendanceMode = null;

    /**
     * Set the name or title of the event.
     *
     * @param string $name The event name.
     * @return void
     */
    public function name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Sets the event start date. Accepts a MySQL datetime string or any format
     * recognised by strtotime(); converts to ISO 8601 automatically.
     *
     * @param string $date Date string in MySQL format or any strtotime()-compatible format.
     * @return void
     */
    public function startDate(string $date): void
    {
        $this->startDate = $this->formatDate($date);
    }

    /**
     * Sets the event end date. Accepts a MySQL datetime string or any format
     * recognised by strtotime(); converts to ISO 8601 automatically.
     *
     * @param string $date Date string in MySQL format or any strtotime()-compatible format.
     * @return void
     */
    public function endDate(string $date): void
    {
        $this->endDate = $this->formatDate($date);
    }

    /**
     * Set a short textual description of the event.
     *
     * @param string $description The event description.
     * @return void
     */
    public function description(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the canonical URL for the event's information page.
     *
     * @param string $url The event URL.
     * @return void
     */
    public function url(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Set the event location as a plain venue name string or a fully-formed
     * Place schema instance. Passing a Place allows search engines to extract
     * address and geo data from the event; a string is sufficient when only the
     * venue name is known.
     *
     * @param string|AbstractSchema $location Venue name or a Place schema instance.
     * @return void
     */
    public function location(string|AbstractSchema $location): void
    {
        $this->location = $location;
    }

    /**
     * Sets the organiser of the event.
     *
     * @param AbstractSchema $organizer An Organization or Person schema instance. Plain strings are not valid.
     * @return void
     */
    public function organizer(AbstractSchema $organizer): void
    {
        $this->organizer = $organizer;
    }

    /**
     * Set the URL of a representative image for the event.
     *
     * @param string $image URL of the image.
     * @return void
     */
    public function image(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Sets the event status to an arbitrary value. Use the named convenience
     * methods (scheduled(), cancelled(), etc.) for standard Schema.org values.
     *
     * @param string $status A Schema.org EventStatusType URL.
     * @return void
     */
    public function eventStatus(string $status): void
    {
        $this->eventStatus = $status;
    }

    /**
     * Sets the event status to https://schema.org/EventScheduled.
     *
     * @return void
     */
    public function scheduled(): void
    {
        $this->eventStatus = 'https://schema.org/EventScheduled';
    }

    /**
     * Sets the event status to https://schema.org/EventCancelled.
     *
     * @return void
     */
    public function cancelled(): void
    {
        $this->eventStatus = 'https://schema.org/EventCancelled';
    }

    /**
     * Sets the event status to https://schema.org/EventPostponed.
     *
     * @return void
     */
    public function postponed(): void
    {
        $this->eventStatus = 'https://schema.org/EventPostponed';
    }

    /**
     * Sets the event status to https://schema.org/EventRescheduled.
     *
     * @return void
     */
    public function rescheduled(): void
    {
        $this->eventStatus = 'https://schema.org/EventRescheduled';
    }

    /**
     * Sets the event status to https://schema.org/EventMoved.
     *
     * @return void
     */
    public function moved(): void
    {
        $this->eventStatus = 'https://schema.org/EventMoved';
    }

    /**
     * Sets the event attendance mode to an arbitrary value. Use the named
     * convenience methods (inPerson(), online(), hybrid()) for standard
     * Schema.org values.
     *
     * @param string $mode A Schema.org EventAttendanceModeEnumeration URL.
     * @return void
     */
    public function eventAttendanceMode(string $mode): void
    {
        $this->eventAttendanceMode = $mode;
    }

    /**
     * Sets the attendance mode to https://schema.org/OfflineEventAttendanceMode.
     *
     * @return void
     */
    public function inPerson(): void
    {
        $this->eventAttendanceMode = 'https://schema.org/OfflineEventAttendanceMode';
    }

    /**
     * Sets the attendance mode to https://schema.org/OnlineEventAttendanceMode.
     *
     * @return void
     */
    public function online(): void
    {
        $this->eventAttendanceMode = 'https://schema.org/OnlineEventAttendanceMode';
    }

    /**
     * Sets the attendance mode to https://schema.org/MixedEventAttendanceMode.
     *
     * @return void
     */
    public function hybrid(): void
    {
        $this->eventAttendanceMode = 'https://schema.org/MixedEventAttendanceMode';
    }

    /**
     * Returns true when no name has been set, which is treated as the minimum
     * signal that this event has not been meaningfully populated.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->name === null;
    }

    /**
     * Build and return the spatie/schema-org Event object.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        $event = Schema::event();

        if ($this->name !== null) {
            $event->name($this->name);
        }

        if ($this->startDate !== null) {
            $event->startDate($this->startDate);
        }

        if ($this->endDate !== null) {
            $event->endDate($this->endDate);
        }

        if ($this->description !== null) {
            $event->description($this->description);
        }

        if ($this->url !== null) {
            $event->url($this->url);
        }

        if ($this->location !== null) {
            // Unwrap AbstractSchema instances (e.g. a Place) to their underlying
            // spatie type. Plain strings are passed through as-is for simple
            // venue name values.
            $event->location(
                $this->location instanceof AbstractSchema
                    ? $this->location->toSpatieObject()
                    : $this->location
            );
        }

        if ($this->organizer !== null) {
            $event->organizer($this->organizer->toSpatieObject());
        }

        if ($this->image !== null) {
            $event->image($this->image);
        }

        // eventStatus defaults to EventScheduled on construction, so this
        // block will fire for every event unless the property is explicitly
        // set to null, ensuring Google's required field is always present.
        if ($this->eventStatus !== null) {
            $event->eventStatus($this->eventStatus);
        }

        if ($this->eventAttendanceMode !== null) {
            $event->eventAttendanceMode($this->eventAttendanceMode);
        }

        return $event;
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
