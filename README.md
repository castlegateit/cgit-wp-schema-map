# CGIT WP Schema Map

A lightweight WordPress plugin that maps existing site content to Schema.org structured data output. It wraps [spatie/schema-org](https://github.com/spatie/schema-org) for JSON-LD generation while abstracting away the structural boilerplate of complex schema types.

This is a companion to `cgit-wp-schema`, not a replacement. Where `cgit-wp-schema` owns and registers post types with schema baked in, `cgit-wp-schema-map` is designed to retrofit schema onto existing content structures — arbitrary post types, ACF fields, flex content blocks — without prescribing how that content is managed.

## Requirements

- PHP 8.2+

## Admin bar

When viewing the front end as a logged-in user with the `manage_options` capability, a **Schema** menu appears in the admin bar listing every schema type output on the current page. Two links are provided at the bottom of the menu to validate the page's structured data in a new tab:

- **Validate with Schema.org** — [validator.schema.org](https://validator.schema.org)
- **Test with Google Rich Results** — [search.google.com/test/rich-results](https://search.google.com/test/rich-results)

To change the required capability, use the `cgit_wp_schema_map_admin_bar_capability` filter:

```php
add_filter('cgit_wp_schema_map_admin_bar_capability', fn() => 'edit_posts');
```

---

## Namespaces

Schema types are grouped into namespaces that reflect the Schema.org hierarchy:

| Namespace | Classes |
|---|---|
| `Castlegate\SchemaMap\Schema\Article` | `Article`, `NewsArticle`, `BlogPosting` |
| `Castlegate\SchemaMap\Schema\Organization` | `Organization`, `LocalBusiness`, `FoodEstablishment` |
| `Castlegate\SchemaMap\Schema\Product` | `Product`, `Vehicle` |
| `Castlegate\SchemaMap\Schema` | Everything else |

## Nested schema types

Several properties require a fully-formed schema instance rather than a plain string. Schema.org does not allow text values for these properties, and passing a string where a schema instance is required will cause a PHP type error.

| Property | Valid schema types |
|---|---|
| `author` (Article, Book) | `Person` or `Organization` |
| `publisher` (Article, Book) | `Organization` or `Person` |
| `provider` (Course) | `Organization` or `Person` |
| `organizer` (Event) | `Organization` or `Person` |
| `seller` (Offer) | `Organization` or `Person` |
| `worksFor` (Person) | `Organization` |
| `manufacturer` (Product, Vehicle) | `Organization` |
| `aggregateRating` (Organization, LocalBusiness, Product, Vehicle) | `AggregateRating` |
| `addOffer()` (Product, Vehicle) | `Offer` |
| `addReview()` (LocalBusiness) | `Review` |

The exception is `location` on `Event`, which accepts either a plain string (venue name) or a `Place` instance — schema.org allows text for this property.

---

## Registering schema

Call `Registry::register()` anywhere that runs before `wp_head` — typically the template file that renders the content. The callback receives the current `$post` object.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Article\Article;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        if (!is_singular('post')) {
            return null;
        }

        $article = new Article();
        $article->headline($post->post_title);
        $article->datePublished($post->post_date);

        return $article;
    });
}
```

Returning `null`, or returning a schema object whose `isEmpty()` check fails, suppresses output for that registration. There is no separate targeting system — use conditions inside the callback or rely on which template file the registration lives in.

### Multiple schemas on one page

Register separate callbacks for each schema block. All registrations run on every request and each independently decides whether to output:

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\BreadcrumbList;
use Castlegate\SchemaMap\Schema\Organization\Organization;
use Castlegate\SchemaMap\Schema\Article\Article;

if (class_exists(Registry::class)) {
    Registry::register(function () {
        $breadcrumb = new BreadcrumbList();
        $breadcrumb->addItem('Home', home_url('/'));
        $breadcrumb->addItem(get_the_title(), get_permalink());
        return $breadcrumb;
    });

    Registry::register(function () {
        $org = new Organization();
        $org->name(get_bloginfo('name'));
        $org->url(home_url());
        return $org;
    });

    Registry::register(function ($post) {
        if (!is_singular('post')) {
            return null;
        }

        $article = new Article();
        $article->headline($post->post_title);
        $article->datePublished($post->post_date);

        return $article;
    });
}
```

---

## FaqPage

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\FaqPage;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        $faq = new FaqPage();

        foreach (get_field('faqs', $post->ID) ?: [] as $item) {
            $faq->addQuestion(
                $item['question'],
                wp_strip_all_tags($item['answer'])
            );
        }

        return $faq;
    });
}
```

### Merging across templates

`FaqPage` implements `MergeableSchema`. If multiple registrations on the same page return a `FaqPage`, the Registry automatically merges all questions into a single output block. This means templates can add their own questions without knowing about each other.

**`header.php`** — site-wide FAQ registered on every page:
```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\FaqPage;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        $faq = new FaqPage();
        $faq->addQuestion('Where are you based?', 'We are based in York, UK.');
        $faq->addQuestion('Do you work remotely?', 'Yes, we work with clients across the UK.');
        return $faq;
    });
}
```

**`single-service.php`** — service-specific questions:
```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\FaqPage;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        $faq = new FaqPage();

        foreach (get_field('service_faqs', $post->ID) ?: [] as $item) {
            $faq->addQuestion($item['question'], $item['answer']);
        }

        return $faq;
    });
}
```

Both registrations contribute questions and the output is a single merged `FAQPage` block. If no questions are added to a `FaqPage` instance, `isEmpty()` returns `true` and it is silently dropped.

---

## Article hierarchy

`Article`, `NewsArticle`, and `BlogPosting` share the same base class. All `Article` setters are available on the subtypes.

```
Article
├── NewsArticle
└── BlogPosting
```

### Article

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Article\Article;
use Castlegate\SchemaMap\Schema\Organization\Organization;
use Castlegate\SchemaMap\Schema\Person;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        if (!is_singular('post')) {
            return null;
        }

        $author = new Person();
        $author->name(get_the_author_meta('display_name', $post->post_author));
        $author->url(get_author_posts_url($post->post_author));

        $publisher = new Organization();
        $publisher->name(get_bloginfo('name'));
        $publisher->url(home_url());
        $publisher->logo(get_field('logo_url', 'option'));

        $article = new Article();
        $article->headline($post->post_title);
        $article->datePublished($post->post_date);    // MySQL datetime string accepted
        $article->dateModified($post->post_modified); // converted to ISO 8601 automatically
        $article->description(get_the_excerpt($post));
        $article->url(get_permalink($post));
        $article->image(get_the_post_thumbnail_url($post, 'full'));
        $article->keywords(implode(', ', wp_get_post_tags($post->ID, ['fields' => 'names'])));
        $article->articleBody(apply_filters('the_content', $post->post_content)); // HTML stripped automatically
        $article->author($author);
        $article->publisher($publisher);

        return $article;
    });
}
```

### NewsArticle

Adds print publication metadata on top of all `Article` properties.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Article\NewsArticle;

if (class_exists(Registry::class)) {
    $article = new NewsArticle();
    $article->headline($post->post_title);
    $article->datePublished($post->post_date);
    $article->dateModified($post->post_modified);
    $article->author($author);
    $article->publisher($publisher);
    // NewsArticle-specific fields:
    $article->dateline('York');
    $article->printEdition('Morning Edition');
    $article->printSection('Business');
    $article->printPage('3');
    $article->printColumn('2');
}
```

### BlogPosting

`BlogPosting` uses the same setters as `Article` — the only difference is the `@type` emitted in the JSON-LD output, which signals to search engines that the content is a blog post.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Article\BlogPosting;

if (class_exists(Registry::class)) {
    $post_schema = new BlogPosting();
    $post_schema->headline($post->post_title);
    $post_schema->datePublished($post->post_date);
    $post_schema->dateModified($post->post_modified);
    $post_schema->url(get_permalink($post));
    $post_schema->image(get_the_post_thumbnail_url($post, 'full'));
}
```

---

## Organization hierarchy

`Organization`, `LocalBusiness`, and `FoodEstablishment` form a cascade. Every property available on `Organization` is also available on `LocalBusiness`, and every property on `LocalBusiness` is available on `FoodEstablishment`.

```
Organization
└── LocalBusiness
    └── FoodEstablishment
```

### Organization

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    $org = new Organization();
    $org->name(get_bloginfo('name'));
    $org->url(home_url());
    $org->logo(get_field('logo_url', 'option'));
    $org->telephone(get_field('telephone', 'option'));
    $org->email(get_field('email', 'option'));
    $org->faxNumber(get_field('fax', 'option'));
    $org->description(get_bloginfo('description'));
    $org->image(get_field('og_image', 'option'));
    $org->sameAs([
        get_field('twitter_url', 'option'),
        get_field('linkedin_url', 'option'),
        get_field('facebook_url', 'option'),
    ]);
}
```

`sameAs` accepts either a single string or an array. Empty or `null` values in the array are ignored by spatie at render time.

### LocalBusiness

Adds address, geo coordinates, opening hours, price range, and reviews.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Organization\LocalBusiness;

if (class_exists(Registry::class)) {
    $business = new LocalBusiness();
    // Inherits all Organization setters:
    $business->name(get_bloginfo('name'));
    $business->url(home_url());
    $business->telephone(get_field('telephone', 'option'));
    $business->logo(get_field('logo_url', 'option'));
    // LocalBusiness-specific:
    $business->streetAddress(get_field('address_street', 'option'));
    $business->addressLocality(get_field('address_city', 'option'));
    $business->postalCode(get_field('address_postcode', 'option'));
    $business->addressCountry('GB');
    $business->geo(53.9600, -1.0873);
    $business->openingHours([
        'Mo-Tu 09:00-17:30',
        'We 09:00-13:00',
        'Th-Fr 09:00-17:30',
    ]);
    $business->priceRange('££');
}
```

Address components are only emitted when at least one is set — an empty `PostalAddress` block is never output. Geo requires both latitude and longitude; providing only one suppresses the `GeoCoordinates` block entirely.

### FoodEstablishment

Extends `LocalBusiness` with cuisine, menu URL, and reservation support. All `Organization` and `LocalBusiness` setters work directly.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Organization\FoodEstablishment;

if (class_exists(Registry::class)) {
    $restaurant = new FoodEstablishment();
    // Organization properties:
    $restaurant->name('The Grill at York');
    $restaurant->url(home_url());
    $restaurant->telephone('+44 1904 000000');
    $restaurant->sameAs(['https://instagram.com/thegrillatyork']);
    // LocalBusiness properties:
    $restaurant->streetAddress('12 High Street');
    $restaurant->addressLocality('York');
    $restaurant->postalCode('YO1 8AA');
    $restaurant->addressCountry('GB');
    $restaurant->geo(53.9600, -1.0873);
    $restaurant->openingHours(['Mo-Su 12:00-22:00']);
    $restaurant->priceRange('£££');
    // FoodEstablishment properties:
    $restaurant->servesCuisine('Modern British');
    $restaurant->hasMenu(home_url('/menu'));
    $restaurant->acceptsReservations(true);
}
```

---

## Product hierarchy

```
Product
└── Vehicle
```

### Product

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Product\Product;
use Castlegate\SchemaMap\Schema\AggregateRating;
use Castlegate\SchemaMap\Schema\Offer;

if (class_exists(Registry::class)) {
    $product = new Product();
    $product->name(get_the_title());
    $product->description(get_the_excerpt());
    $product->url(get_permalink());
    $product->image(get_the_post_thumbnail_url($post, 'full'));
    $product->brand(get_field('brand'));
    $product->sku(get_field('sku'));
    $product->gtin(get_field('barcode'));
    $product->color(get_field('colour'));
    $product->category(get_field('category'));

    $offer = new Offer();
    $offer->price((float) get_field('price'));
    $offer->priceCurrency('GBP');
    $offer->inStock(); // convenience method
    $offer->priceValidUntil(get_field('sale_ends')); // accepts MySQL datetime

    $product->addOffer($offer);
}
```

Multiple offers can be added — call `addOffer()` more than once to represent different variants, price tiers, or regional pricing:

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Offer;

if (class_exists(Registry::class)) {
    $standardOffer = new Offer();
    $standardOffer->price(29.99);
    $standardOffer->priceCurrency('GBP');
    $standardOffer->inStock();

    $premiumOffer = new Offer();
    $premiumOffer->price(49.99);
    $premiumOffer->priceCurrency('GBP');
    $premiumOffer->inStock();

    $product->addOffer($standardOffer);
    $product->addOffer($premiumOffer);
}
```

### Vehicle

All `Product` setters are available. `Vehicle` adds automotive-specific fields with named convenience methods for the enum properties.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Product\Vehicle;
use Castlegate\SchemaMap\Schema\Offer;

if (class_exists(Registry::class)) {
    $vehicle = new Vehicle();
    // Product properties:
    $vehicle->name(get_field('make') . ' ' . get_field('model'));
    $vehicle->description(get_the_excerpt());
    $vehicle->url(get_permalink());
    $vehicle->image(get_the_post_thumbnail_url($post, 'full'));
    $vehicle->brand(get_field('make'));
    $vehicle->color(get_field('colour'));
    // Vehicle-specific:
    $vehicle->mileage((float) get_field('mileage'), 'SMI'); // SMI = statute miles; KMT = kilometres
    $vehicle->numberOfDoors((int) get_field('doors'));
    $vehicle->vehicleSeatingCapacity((float) get_field('seats'));
    $vehicle->vehicleIdentificationNumber(get_field('vin'));
    $vehicle->vehicleModelDate(get_field('model_year'));
    $vehicle->dateVehicleFirstRegistered(get_field('registration_date'));
    $vehicle->fuelType(get_field('fuel_type'));
    $vehicle->bodyType(get_field('body_type'));

    // Transmission — convenience methods avoid needing to know the Schema.org URL:
    $vehicle->automaticTransmission();
    // or: $vehicle->manualTransmission();
    // or: $vehicle->vehicleTransmission('https://schema.org/AutomaticTransmission');

    // Drive wheel configuration:
    $vehicle->allWheelDrive();
    // or: $vehicle->fourWheelDrive();
    // or: $vehicle->frontWheelDrive();
    // or: $vehicle->rearWheelDrive();
    // or: $vehicle->driveWheelConfiguration('https://schema.org/FrontWheelDriveConfiguration');

    $offer = new Offer();
    $offer->price((float) get_field('price'));
    $offer->priceCurrency('GBP');
    $offer->inStock();
    $vehicle->addOffer($offer);
}
```

---

## Offer

Typically nested inside `Product` or `Vehicle` via `addOffer()`, but can also be registered standalone.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Offer;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    $offer = new Offer();
    $offer->price(0.0);           // 0.0 is a valid price (free); null means price is absent
    $offer->priceCurrency('GBP');
    $offer->url(get_permalink());
    $offer->priceValidUntil(get_field('offer_expires')); // MySQL datetime accepted

    $seller = new Organization();
    $seller->name(get_bloginfo('name'));
    $seller->url(home_url());
    $offer->seller($seller);

    // Availability convenience methods:
    $offer->inStock();
    // $offer->outOfStock();
    // $offer->preOrder();
    // $offer->discontinued();
    // $offer->limitedAvailability();
    // $offer->onlineOnly();
    // $offer->inStoreOnly();
    // $offer->soldOut();

    // Raw escape hatch for unusual values:
    // $offer->availability('https://schema.org/InStock');
}
```

---

## Event

`eventStatus` defaults to `EventScheduled` on construction — Google's required field is always present without the caller needing to set it. Named convenience methods replace the need to know Schema.org URL strings.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Event;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    $event = new Event();
    $event->name(get_the_title());
    $event->startDate(get_field('event_start')); // MySQL datetime accepted
    $event->endDate(get_field('event_end'));
    $event->description(get_the_excerpt());
    $event->url(get_permalink());
    $event->image(get_the_post_thumbnail_url($post, 'full'));

    // Event status — defaults to EventScheduled; override only when needed:
    $event->cancelled();
    // $event->postponed();
    // $event->rescheduled();
    // $event->moved();
    // $event->scheduled(); // explicit reset to default

    // Raw escape hatch:
    // $event->eventStatus('https://schema.org/EventScheduled');

    // Attendance mode:
    $event->inPerson();
    // $event->online();
    // $event->hybrid();

    $organizer = new Organization();
    $organizer->name(get_bloginfo('name'));
    $organizer->url(home_url());
    $event->organizer($organizer);
}
```

### Event location as a string

For simple venues where only the name is needed:

```php
$event->location('The Grand Assembly Rooms, York');
```

### Event location as a Place

Pass a fully-formed `Place` instance to give search engines address and geo data alongside the venue name:

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Place;

if (class_exists(Registry::class)) {
    $venue = new Place();
    $venue->name(get_field('venue_name'));
    $venue->streetAddress(get_field('venue_street'));
    $venue->addressLocality(get_field('venue_city'));
    $venue->postalCode(get_field('venue_postcode'));
    $venue->addressCountry('GB');
    $venue->geo(
        (float) get_field('venue_lat'),
        (float) get_field('venue_lng')
    );
    $venue->telephone(get_field('venue_phone'));

    $event->location($venue);
}
```

---

## Place

`Place` is useful both as a standalone schema block and as the location value on an `Event`.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Place;

if (class_exists(Registry::class)) {
    $place = new Place();
    $place->name(get_field('location_name'));
    $place->description(get_field('location_description'));
    $place->url(get_permalink());
    $place->telephone(get_field('telephone'));
    $place->streetAddress(get_field('street'));
    $place->addressLocality(get_field('city'));
    $place->postalCode(get_field('postcode'));
    $place->addressCountry('GB');
    $place->geo(53.9600, -1.0873);
    $place->openingHours(['Mo-Fr 09:00-17:00', 'Sa 10:00-13:00']);
}
```

---

## Person

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Person;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    $person = new Person();
    $person->name(get_the_title());
    $person->jobTitle(get_field('job_title'));
    $person->description(get_field('bio'));
    $person->image(get_the_post_thumbnail_url($post, 'full'));
    $person->email(get_field('email'));
    $person->telephone(get_field('direct_line'));
    $person->url(get_permalink());
    $person->sameAs([
        get_field('linkedin_url'),
        get_field('twitter_url'),
    ]);

    $org = new Organization();
    $org->name(get_bloginfo('name'));
    $org->url(home_url());
    $person->worksFor($org);
}
```

---

## AggregateRating

Almost always used as a nested property of `LocalBusiness`, `Organization`, or `Product` rather than registered standalone.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\AggregateRating;
use Castlegate\SchemaMap\Schema\Organization\LocalBusiness;

if (class_exists(Registry::class)) {
    $rating = new AggregateRating();
    $rating->ratingValue(4.8);
    $rating->reviewCount(127);  // written reviews only
    $rating->ratingCount(214);  // total ratings including star-only
    $rating->bestRating(5.0);
    $rating->worstRating(1.0);

    $business = new LocalBusiness();
    $business->name(get_bloginfo('name'));
    $business->aggregateRating($rating);
}
```

`reviewCount` and `ratingCount` are distinct: `reviewCount` is the number of reviews that include written content, `ratingCount` is the total including those with only a star rating. Google requires at least one of the two.

> **Note:** Google only shows AggregateRating rich results for ratings sourced from a legitimate third party — a Trustpilot or Google Reviews feed, for example. First-party self-aggregated testimonials are not eligible.

---

## Review

Typically accumulated on a `LocalBusiness` via `addReview()`. Multiple calls are collected and output as an array.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Review;
use Castlegate\SchemaMap\Schema\Organization\LocalBusiness;

if (class_exists(Registry::class)) {
    $business = new LocalBusiness();
    $business->name(get_bloginfo('name'));

    foreach (get_field('reviews', 'option') ?: [] as $r) {
        $review = new Review();
        $review->author($r['name']);          // string; wrapped in Person internally
        $review->reviewBody($r['body']);
        $review->ratingValue((float) $r['rating']);
        $review->bestRating(5.0);
        $review->worstRating(1.0);
        $review->datePublished($r['date']);   // MySQL datetime accepted
        $review->url($r['source_url']);

        $business->addReview($review);
    }
}
```

The `author` field accepts a plain string name; it is wrapped in a `Person` with a `name` property internally — callers do not need to construct a `Person` instance.

---

## ContentCapture

A utility for capturing rendered HTML from WordPress template parts or ACF flex content loops, for use with schema setters that accept HTML input such as `articleBody()`.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\ContentCapture;
use Castlegate\SchemaMap\Schema\Article\Article;

if (class_exists(Registry::class)) {
    $article = new Article();
    $article->headline($post->post_title);
    $article->articleBody(ContentCapture::capture(function () {
        get_template_part('template-parts/content');
    }));
}
```

Works equally well with loops:

```php
$article->articleBody(ContentCapture::capture(function () use ($post) {
    foreach (get_field('flexible_content', $post->ID) ?: [] as $block) {
        get_template_part('template-parts/blocks/' . $block['acf_fc_layout'], null, $block);
    }
}));
```

`articleBody()` strips the captured HTML to plain text automatically — there is no need to call `strip_tags()` yourself.

---

## Course

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Course;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    $provider = new Organization();
    $provider->name(get_bloginfo('name'));
    $provider->url(home_url());

    $course = new Course();
    $course->name(get_the_title());
    $course->description(get_the_excerpt());
    $course->url(get_permalink());
    $course->image(get_the_post_thumbnail_url($post, 'full'));
    $course->courseCode(get_field('course_code'));
    $course->educationalCredentialAwarded(get_field('qualification'));
    $course->inLanguage('en-GB');
    $course->keywords(get_field('keywords'));
    $course->teaches(get_field('learning_outcomes'));
    $course->coursePrerequisites(get_field('prerequisites'));
    $course->provider($provider);
}
```

---

## Book

`bookFormat` has named convenience methods to avoid the need to know Schema.org URL strings.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Book;
use Castlegate\SchemaMap\Schema\Person;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    $author = new Person();
    $author->name(get_field('author_name'));
    $author->url(get_field('author_url'));

    $publisher = new Organization();
    $publisher->name(get_field('publisher_name'));

    $book = new Book();
    $book->name(get_the_title());
    $book->description(get_the_excerpt());
    $book->url(get_permalink());
    $book->image(get_the_post_thumbnail_url($post, 'full'));
    $book->isbn(get_field('isbn'));
    $book->numberOfPages((int) get_field('page_count'));
    $book->inLanguage('en-GB');
    $book->datePublished(get_field('publication_date'));
    $book->author($author);
    $book->publisher($publisher);

    // Format convenience methods:
    $book->hardcover();
    // $book->paperback();
    // $book->ebook();
    // $book->audiobook();

    // Raw escape hatch:
    // $book->bookFormat('https://schema.org/Hardcover');
}
```

---

## BreadcrumbList

Items are added in display order; 1-based position numbers are assigned automatically.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\BreadcrumbList;

if (class_exists(Registry::class)) {
    $breadcrumb = new BreadcrumbList();
    $breadcrumb->addItem('Home', home_url('/'));
    $breadcrumb->addItem('Services', home_url('/services'));
    $breadcrumb->addItem('Web Design', home_url('/services/web-design'));
    $breadcrumb->addItem(get_the_title(), get_permalink());
}
```

---

## DefinedTerm

Useful for glossaries, taxonomies, or structured educational content where terms belong to a known vocabulary.

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\DefinedTerm;

if (class_exists(Registry::class)) {
    $term = new DefinedTerm();
    $term->name(get_the_title());
    $term->description(get_field('definition'));
    $term->url(get_permalink());
    $term->termCode(get_field('term_code'));
    $term->inDefinedTermSet('https://example.com/glossary');
}
```

---

## Common patterns

### LocalBusiness with rating and reviews

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Organization\LocalBusiness;
use Castlegate\SchemaMap\Schema\AggregateRating;
use Castlegate\SchemaMap\Schema\Review;

if (class_exists(Registry::class)) {
    Registry::register(function () {
        $rating = new AggregateRating();
        $rating->ratingValue(4.9);
        $rating->reviewCount(83);
        $rating->bestRating(5.0);
        $rating->worstRating(1.0);

        $business = new LocalBusiness();
        $business->name(get_bloginfo('name'));
        $business->url(home_url());
        $business->telephone(get_field('telephone', 'option'));
        $business->streetAddress(get_field('address_street', 'option'));
        $business->addressLocality(get_field('address_city', 'option'));
        $business->postalCode(get_field('address_postcode', 'option'));
        $business->addressCountry('GB');
        $business->aggregateRating($rating);

        foreach (get_field('featured_reviews', 'option') ?: [] as $r) {
            $review = new Review();
            $review->author($r['author']);
            $review->reviewBody($r['body']);
            $review->ratingValue((float) $r['rating']);
            $review->bestRating(5.0);
            $review->worstRating(1.0);
            $review->datePublished($r['date']);
            $business->addReview($review);
        }

        return $business;
    });
}
```

### Article with full author and publisher

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Article\Article;
use Castlegate\SchemaMap\Schema\Person;
use Castlegate\SchemaMap\Schema\Organization\Organization;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        if (!is_singular('post')) {
            return null;
        }

        $author = new Person();
        $author->name(get_the_author_meta('display_name', $post->post_author));
        $author->url(get_author_posts_url($post->post_author));
        $author->image(get_avatar_url($post->post_author, ['size' => 400]));

        $publisher = new Organization();
        $publisher->name(get_bloginfo('name'));
        $publisher->url(home_url());
        $publisher->logo(get_field('logo_url', 'option'));

        $article = new Article();
        $article->headline($post->post_title);
        $article->datePublished($post->post_date);
        $article->dateModified($post->post_modified);
        $article->description(get_the_excerpt($post));
        $article->articleBody(apply_filters('the_content', $post->post_content)); // HTML stripped automatically
        $article->url(get_permalink($post));
        $article->image(get_the_post_thumbnail_url($post, 'full'));
        $article->author($author);
        $article->publisher($publisher);

        return $article;
    });
}
```

### Cancelled event with rescheduled date

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Event;

if (class_exists(Registry::class)) {
    $event = new Event();
    $event->name(get_the_title());
    $event->startDate(get_field('new_date')); // updated date
    $event->rescheduled();                    // sets eventStatus to EventRescheduled
    $event->inPerson();
    $event->location(get_field('venue_name'));
}
```

### Product not yet in stock

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Product\Product;
use Castlegate\SchemaMap\Schema\Offer;

if (class_exists(Registry::class)) {
    $offer = new Offer();
    $offer->price((float) get_field('price'));
    $offer->priceCurrency('GBP');
    $offer->preOrder();
    $offer->priceValidUntil(get_field('launch_date'));

    $product = new Product();
    $product->name(get_the_title());
    $product->addOffer($offer);
}
```

### Vehicle with full metadata

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Product\Vehicle;
use Castlegate\SchemaMap\Schema\Offer;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        if (!is_singular('vehicle')) {
            return null;
        }

        $offer = new Offer();
        $offer->price((float) get_field('asking_price'));
        $offer->priceCurrency('GBP');
        $offer->inStock();

        $vehicle = new Vehicle();
        $vehicle->name(get_field('make') . ' ' . get_field('model'));
        $vehicle->description(get_the_excerpt());
        $vehicle->url(get_permalink());
        $vehicle->image(get_the_post_thumbnail_url($post, 'full'));
        $vehicle->brand(get_field('make'));
        $vehicle->color(get_field('colour'));
        $vehicle->sku(get_field('stock_number'));
        $vehicle->mileage((float) get_field('mileage'), 'SMI');
        $vehicle->numberOfDoors((int) get_field('doors'));
        $vehicle->vehicleIdentificationNumber(get_field('vin'));
        $vehicle->vehicleModelDate(get_field('year'));
        $vehicle->dateVehicleFirstRegistered(get_field('first_reg'));
        $vehicle->fuelType(get_field('fuel'));
        $vehicle->bodyType(get_field('body_style'));
        $vehicle->automaticTransmission();
        $vehicle->allWheelDrive();
        $vehicle->addOffer($offer);

        return $vehicle;
    });
}
```

### FoodEstablishment pulling the full hierarchy

Because `FoodEstablishment` extends `LocalBusiness` which extends `Organization`, every setter from all three classes is available directly on the one instance. There is no need to build separate objects and nest them:

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Organization\FoodEstablishment;
use Castlegate\SchemaMap\Schema\AggregateRating;
use Castlegate\SchemaMap\Schema\Review;

if (class_exists(Registry::class)) {
    Registry::register(function () {
        $rating = new AggregateRating();
        $rating->ratingValue(4.6);
        $rating->reviewCount(312);
        $rating->bestRating(5.0);
        $rating->worstRating(1.0);

        $restaurant = new FoodEstablishment();
        // Organization-level
        $restaurant->name(get_bloginfo('name'));
        $restaurant->url(home_url());
        $restaurant->telephone(get_field('telephone', 'option'));
        $restaurant->email(get_field('email', 'option'));
        $restaurant->logo(get_field('logo_url', 'option'));
        $restaurant->sameAs([
            get_field('instagram_url', 'option'),
            get_field('tripadvisor_url', 'option'),
        ]);
        $restaurant->aggregateRating($rating);
        // LocalBusiness-level
        $restaurant->streetAddress(get_field('address_street', 'option'));
        $restaurant->addressLocality(get_field('address_city', 'option'));
        $restaurant->postalCode(get_field('address_postcode', 'option'));
        $restaurant->addressCountry('GB');
        $restaurant->geo(53.9600, -1.0873);
        $restaurant->openingHours([
            'Mo-Fr 12:00-14:30',
            'Mo-Fr 18:00-22:00',
            'Sa-Su 12:00-22:00',
        ]);
        $restaurant->priceRange('£££');
        // FoodEstablishment-level
        $restaurant->servesCuisine('Modern British');
        $restaurant->hasMenu(home_url('/menu'));
        $restaurant->acceptsReservations(true);

        foreach (get_field('featured_reviews', 'option') ?: [] as $r) {
            $review = new Review();
            $review->author($r['author']);
            $review->reviewBody($r['body']);
            $review->ratingValue((float) $r['rating']);
            $review->bestRating(5.0);
            $review->worstRating(1.0);
            $review->datePublished($r['date']);
            $restaurant->addReview($review);
        }

        return $restaurant;
    });
}
```

### Sitewide schema in functions.php

Schema that belongs on every page — `Organization`, `BreadcrumbList` — is best registered once in `functions.php` or a site-wide include rather than in individual templates. Template-specific schema then layers on top:

```php
// functions.php

use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Organization\Organization;
use Castlegate\SchemaMap\Schema\BreadcrumbList;

if (class_exists(Registry::class)) {
    // Organisation block on every page
    Registry::register(function () {
        $org = new Organization();
        $org->name(get_bloginfo('name'));
        $org->url(home_url());
        $org->logo(get_field('logo_url', 'option'));
        $org->telephone(get_field('telephone', 'option'));
        $org->sameAs([
            get_field('twitter_url', 'option'),
            get_field('linkedin_url', 'option'),
        ]);
        return $org;
    });

    // Breadcrumb on every page (structure determined per-template)
    Registry::register(function ($post) {
        $breadcrumb = new BreadcrumbList();
        $breadcrumb->addItem('Home', home_url('/'));

        if (is_singular()) {
            if ($post->post_type !== 'page') {
                $archive_url = get_post_type_archive_link($post->post_type);
                $archive_label = get_post_type_object($post->post_type)->labels->name;
                $breadcrumb->addItem($archive_label, $archive_url);
            }
            $breadcrumb->addItem(get_the_title($post), get_permalink($post));
        }

        return $breadcrumb;
    });
}
```

### Glossary page with multiple DefinedTerms

A single template can register multiple schemas by calling `Registry::register()` more than once. Each produces its own JSON-LD block:

```php
// archive-glossary.php

use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\DefinedTerm;

$terms = new WP_Query(['post_type' => 'glossary_term', 'posts_per_page' => -1]);

if (class_exists(Registry::class)) {
    foreach ($terms->posts as $term_post) {
        Registry::register(function () use ($term_post) {
            $term = new DefinedTerm();
            $term->name($term_post->post_title);
            $term->description(get_field('definition', $term_post->ID));
            $term->url(get_permalink($term_post));
            $term->termCode(get_field('term_code', $term_post->ID));
            $term->inDefinedTermSet(home_url('/glossary'));
            return $term;
        });
    }
}
```

---

## Edge cases

### Empty schema is silently dropped

If no meaningful data has been set, `isEmpty()` returns `true` and the Registry omits the block entirely. There is no need to guard against empty output — a `new Article()` with no properties set produces no JSON-LD:

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\Article\Article;

if (class_exists(Registry::class)) {
    Registry::register(function ($post) {
        $article = new Article();

        if ($headline = $post->post_title) {
            $article->headline($headline);
        }

        return $article; // isEmpty() returns true if headline was never set
    });
}
```

### Null-safe field values

`get_field()` can return `false`, `null`, or an empty string. Setters accept `string` — passing `false` or `null` directly would cause a type error. The safest pattern is to guard before calling:

```php
if ($telephone = get_field('telephone', 'option')) {
    $business->telephone($telephone);
}
```

Or for values that should default gracefully to an empty string:

```php
$business->telephone(get_field('telephone', 'option') ?: '');
// note: empty string is still set, which spatie will emit — prefer the guard above for optional fields
```

### Partial address

If only some address components are set, only those are emitted inside the `PostalAddress` block — the block itself is not suppressed:

```php
$business->postalCode('YO1 8AA');
$business->addressCountry('GB');
// PostalAddress is emitted with postalCode and addressCountry only
```

An address block is suppressed entirely only when **all** address components are `null`.

### Partial geo is fully suppressed

Unlike address, geo requires **both** latitude and longitude. Setting only one means neither is emitted:

```php
$business->geo(53.9600, null); // cannot pass null — type error
// Correct: call geo() only when both values are available
if ($lat && $lng) {
    $business->geo((float) $lat, (float) $lng);
}
```

### Free products (price of zero)

`null` and `0.0` are meaningfully different for `Offer::price()`. `null` means the price was never set and is omitted from output. `0.0` is a valid price and will be emitted as `0`:

```php
$offer->price(0.0);  // emits "price": 0 — correct for free items
// vs never calling price() at all — price property absent from output
```

### Date input formats

All date setters (`datePublished`, `dateModified`, `startDate`, `endDate`, `priceValidUntil`, etc.) accept any format that PHP's `strtotime()` can parse. MySQL datetime strings are the most common input from WordPress:

```php
$article->datePublished('2025-06-01 09:00:00');  // MySQL — converted to ISO 8601
$article->datePublished('1 June 2025');           // human-readable — converted
$article->datePublished('2025-06-01T09:00:00+01:00'); // already ISO 8601 — passed through
```

### sameAs with empty values

`sameAs` accepts an array, which commonly comes from ACF option fields that may not all be filled in. Spatie handles empty strings gracefully at render time, but for clean output it is worth filtering first:

```php
$org->sameAs(array_filter([
    get_field('twitter_url', 'option'),
    get_field('linkedin_url', 'option'),
    get_field('facebook_url', 'option'),
]));
```

---

## Standalone output

Schema objects can be rendered outside the Registry by calling `toScript()` directly. This produces a complete `<script type="application/ld+json">` tag and is useful when embedding schema inline in a specific template location rather than in `wp_head`:

```php
use Castlegate\SchemaMap\Registry;
use Castlegate\SchemaMap\Schema\BreadcrumbList;

if (class_exists(Registry::class)) {
    $breadcrumb = new BreadcrumbList();
    $breadcrumb->addItem('Home', home_url('/'));
    $breadcrumb->addItem(get_the_title(), get_permalink());

    echo $breadcrumb->toScript();
}
```

`toSpatieObject()` is also public and returns the underlying spatie object for cases where further manipulation is needed before rendering.

---

## License

Released under the [MIT License](https://opensource.org/licenses/MIT). See [LICENSE](LICENSE) for details.
