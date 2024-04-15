<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPreparedSets(codeQuality: true, codingStyle: true)
    ->withAttributesSets(symfony: true)
    ->withPhpSets(php82: true)
    ->withPaths([
        __DIR__ . '/../src',
    ])
    ->withImportNames()
    ->withRootFiles();
