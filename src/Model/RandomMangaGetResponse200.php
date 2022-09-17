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
     *
     * @return Manga
     */
    public function getData(): Manga
    {
        return $this->data;
    }

    /**
     * Manga Resource.
     *
     * @param Manga $data
     *
     * @return self
     */
    public function setData(Manga $data): self
    {
        $this->data = $data;

        return $this;
    }
}
