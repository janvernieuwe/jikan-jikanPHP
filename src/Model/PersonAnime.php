<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonAnime
{
    /**
     * @var PersonAnimeDataItem[]
     */
    protected $data;

    /**
     * @return PersonAnimeDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param PersonAnimeDataItem[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
