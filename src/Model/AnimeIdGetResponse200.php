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
     */
    public function getData(): Anime
    {
        return $this->data;
    }

    /**
     * Anime Resource.
     */
    public function setData(Anime $anime): self
    {
        $this->data = $anime;

        return $this;
    }
}
