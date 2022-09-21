<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaIdFullGetResponse200
{
    /**
     * Manga Resource.
     *
     * @var MangaFull
     */
    protected $data;

    /**
     * Manga Resource.
     */
    public function getData(): MangaFull
    {
        return $this->data;
    }

    /**
     * Manga Resource.
     */
    public function setData(MangaFull $mangaFull): self
    {
        $this->data = $mangaFull;

        return $this;
    }
}
