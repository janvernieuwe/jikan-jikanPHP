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
     *
     * @return AnimeEpisode
     */
    public function getData(): AnimeEpisode
    {
        return $this->data;
    }

    /**
     * Anime Episode Resource.
     *
     * @param AnimeEpisode $data
     *
     * @return self
     */
    public function setData(AnimeEpisode $data): self
    {
        $this->data = $data;

        return $this;
    }
}
