<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterManga
{
    /**
     * @var CharacterMangaDataItem[]
     */
    protected $data = [];

    /**
     * @return CharacterMangaDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CharacterMangaDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
