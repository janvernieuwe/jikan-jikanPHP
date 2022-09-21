<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class RandomMangaGetResponse200
{
    /**
     * Manga Resource.
     *
     * @var Manga
     */
    protected $data;

    /**
     * Manga Resource.
     */
    public function getData(): Manga
    {
        return $this->data;
    }

    /**
     * Manga Resource.
     */
    public function setData(Manga $manga): self
    {
        $this->data = $manga;

        return $this;
    }
}
