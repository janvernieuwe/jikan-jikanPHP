<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaPictures
{
    /**
     * @var MangaImages[]
     */
    protected $data = [];

    /**
     * @return MangaImages[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param MangaImages[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
