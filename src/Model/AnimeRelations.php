<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeRelations extends ArrayObject
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
     * @var list<AnimeRelationsDataItem>
     */
    protected $data;

    /**
     * @return list<AnimeRelationsDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<AnimeRelationsDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
