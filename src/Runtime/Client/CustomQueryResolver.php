<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
