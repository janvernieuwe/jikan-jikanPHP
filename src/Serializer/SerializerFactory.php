<?php

namespace Jikan\JikanPHP\Serializer;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class SerializerFactory
{
    public static function create(): Serializer
    {
        $builder = new SerializerBuilder();
        $builder->addMetadataDir(__DIR__.'/../../metadata/');

        return $builder->build();
    }
}
