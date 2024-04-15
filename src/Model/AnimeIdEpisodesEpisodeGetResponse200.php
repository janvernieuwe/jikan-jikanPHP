<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeIdEpisodesEpisodeGetResponse200 extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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
    public function setData(AnimeEpisode $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
