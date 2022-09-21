<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaIdRelationsGetResponse200
{
    /**
     * @var Relation[]
     */
    protected $data = [];

    /**
     * @return Relation[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Relation[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
