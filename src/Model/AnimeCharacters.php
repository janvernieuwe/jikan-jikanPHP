<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharacters extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @var list<AnimeCharactersDataItem>
     */
    protected $data;

    /**
     * @return list<AnimeCharactersDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<AnimeCharactersDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
