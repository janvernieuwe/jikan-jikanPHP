<?php

namespace Jikan\JikanPHP\Parser;

class MetadataParser
{
    /**
     * @var string
     */
    private $className;

    /**
     * @var array
     */
    private $classmap;

    /**
     * MetadataParser constructor.
     *
     * @param string $className
     * @param array  $classmap
     */
    public function __construct($className, array $classmap = [])
    {
        $this->className = $className;
        $this->classmap = $classmap;
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

        if (strpos($type, 'string[]') !== false) {
            return sprintf('array');
        }

        return $this->mapType($type);
    }

    public function mapType(string $type): string
    {
        $searchKey = str_replace('[]', '', $type, $isArray);
        $type = $this->classmap[$searchKey] ?? $type;
        $type = ltrim($type, '\\');
        $type = str_replace('[]', '', $type);
        if ($isArray) {
            return sprintf('array<%s>', $type);
        }

        return $type;
    }
}
