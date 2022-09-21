<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeIdEpisodesEpisodeGetResponse200
{
    /**
     * Anime Episode Resource.
     *
     * @var AnimeEpisode
     */
    protected $data;

    /**
     * Anime Episode Resource.
     */
    public function getData(): AnimeEpisode
    {
        return $this->data;
    }

    /**
     * Anime Episode Resource.
     */
    public function setData(AnimeEpisode $animeEpisode): self
    {
        $this->data = $animeEpisode;

        return $this;
    }
}
