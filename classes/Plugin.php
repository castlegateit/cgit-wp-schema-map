<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap;

/**
 * Plugin bootstrapper.
 *
 * Serves as the single entry point called from the plugin root file. Its only
 * responsibility is to initialise the Registry, which wires up the WordPress
 * hooks that drive schema output.
 */
class Plugin
{
    /**
     * Initialise the plugin by bootstrapping the schema Registry.
     *
     * Called once from the plugin root file immediately after the Composer
     * autoloader is loaded.
     *
     * @return void
     */
    public static function init(): void
    {
        Registry::init();
    }
}
