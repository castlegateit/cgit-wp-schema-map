<?php

namespace Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Generator;

use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Generator\Parser\DefinitionParser;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Generator\Writer\Filesystem;

class PackageGenerator
{
    public function generate(Definitions $definitions)
    {
        $types = (new DefinitionParser())->parse($definitions);

        $filesystem = new Filesystem(__DIR__.'/..');

        $filesystem->clear();

        $filesystem->cloneStaticFiles();

        $types->each(function (Type $type) use ($filesystem, $types) {
            $type->setTypeCollection($types);
            $filesystem->createType($type);
        });

        $filesystem->createBuilderClass($types);
    }
}
