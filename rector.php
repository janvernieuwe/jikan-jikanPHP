<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\ClassMethod\ReturnTypeFromStrictScalarReturnExprRector;
use Rector\CodeQuality\Rector\New_\NewStaticToNewSelfRector;
use Rector\Config\RectorConfig;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Php80\Rector\FunctionLike\UnionTypesRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;
use Rector\TypeDeclaration\Rector\FunctionLike\ReturnTypeDeclarationRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::NAMING,
    ]);

    $rectorConfig->rules([
        ReturnTypeDeclarationRector::class,
        UnionTypesRector::class,
        TypedPropertyRector::class,
        ReturnTypeFromStrictNativeCallRector::class,
        ReturnTypeFromStrictScalarReturnExprRector::class,
        NewStaticToNewSelfRector::class,
    ]);

    $rectorConfig->importNames();
};
