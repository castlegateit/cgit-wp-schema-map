<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap;

/**
 * Captures the output of a callback using output buffering and returns it as a
 * string. Useful for collecting rendered HTML from WordPress template parts or
 * ACF flex content loops before passing it to a schema setter such as
 * articleBody(), which handles HTML stripping internally.
 *
 * Example:
 *
 *     $body = ContentCapture::capture(function () {
 *         get_template_part('template-parts/content');
 *     });
 *
 *     $article->articleBody($body);
 */
class ContentCapture
{
    /**
     * Execute the callback and return everything it outputs as a string.
     *
     * @param callable $callback Any callable that produces output.
     * @return string The captured output.
     */
    public static function capture(callable $callback): string
    {
        ob_start();
        $callback();
        return ob_get_clean();
    }
}