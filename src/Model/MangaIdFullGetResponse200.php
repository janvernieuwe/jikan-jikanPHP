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
     *
     * @return MangaFull
     */
    public function getData(): MangaFull
    {
        return $this->data;
    }

    /**
     * Manga Resource.
     *
     * @param MangaFull $data
     *
     * @return self
     */
    public function setData(MangaFull $data): self
    {
        $this->data = $data;

        return $this;
    }
}
