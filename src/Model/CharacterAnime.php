<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterAnime
{
    /**
     * @var CharacterAnimeDataItem[]
     */
    protected $data = [];

    /**
     * @return CharacterAnimeDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CharacterAnimeDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
