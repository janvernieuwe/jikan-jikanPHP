<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeIdGetResponse200
{
    /**
     * Anime Resource.
     *
     * @var Anime
     */
    protected $data;

    /**
     * Anime Resource.
     *
     * @return Anime
     */
    public function getData(): Anime
    {
        return $this->data;
    }

    /**
     * Anime Resource.
     *
     * @param Anime $data
     *
     * @return self
     */
    public function setData(Anime $data): self
    {
        $this->data = $data;

        return $this;
    }
}
