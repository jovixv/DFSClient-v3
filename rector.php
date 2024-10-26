<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        SetList::PHP_80,
        SetList::PHP_81,
        SetList::PHP_82,
        SetList::PHP_83,
        LevelSetList::UP_TO_PHP_83,
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_83);
    $rectorConfig->importNames();
    $rectorConfig->importShortClasses(false);
};
