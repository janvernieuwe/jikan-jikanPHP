<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Runtime\Normalizer;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return count(array_filter($array, static fn ($key) => is_numeric($key), ARRAY_FILTER_USE_KEY)) === count($array);
    }
}
