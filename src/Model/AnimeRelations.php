<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeRelations
{
    /**
     * @var AnimeRelationsDataItem[]
     */
    protected $data = [];

    /**
     * @return AnimeRelationsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AnimeRelationsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
