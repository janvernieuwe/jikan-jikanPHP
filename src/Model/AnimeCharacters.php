<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharacters
{
    /**
     * @var AnimeCharactersDataItem[]
     */
    protected $data = [];

    /**
     * @return AnimeCharactersDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AnimeCharactersDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
