<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class UserStatisticsData extends ArrayObject
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
     * Anime Statistics.
     *
     * @var UserStatisticsDataAnime
     */
    protected $anime;

    /**
     * Manga Statistics.
     *
     * @var UserStatisticsDataManga
     */
    protected $manga;

    /**
     * Anime Statistics.
     */
    public function getAnime(): UserStatisticsDataAnime
    {
        return $this->anime;
    }

    /**
     * Anime Statistics.
     */
    public function setAnime(UserStatisticsDataAnime $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }

    /**
     * Manga Statistics.
     */
    public function getManga(): UserStatisticsDataManga
    {
        return $this->manga;
    }

    /**
     * Manga Statistics.
     */
    public function setManga(UserStatisticsDataManga $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }
}
