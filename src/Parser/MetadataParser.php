<?php

namespace Jikan\JikanPHP\Parser;

use Jikan\Model\Common\MalUrl;

class MetadataParser
{
    /**
     * @var string
     */
    private $className;

    /**
     * MetadataParser constructor.
     *
     * @param string $className
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    public function getParsedProperties(): array
    {
        $class = new \ReflectionClass($this->className);
        $properties[$this->className]['properties'] = [];
        foreach ($class->getProperties() as $property) {
            $properties[$this->className]['properties'][$property->getName()] =
                ['type' => $this->parseTypeFromDocblock($property->getDocComment())];
        }

        return $properties;
    }

    public function parseTypeFromDocblock(string $docblock): string
    {
        preg_match_all('/@var\s([\\\\\w\[\]]+)/', $docblock, $matches);
        $type = $matches[1][0] ?? $docblock;
        if (strpos($type, 'MalUrl[]') !== false) {
            return sprintf('array<%s>', MalUrl::class);
        }
        if (strpos($type, 'string[]') !== false) {
            return sprintf('array');
        }

        return $type;
    }
}

