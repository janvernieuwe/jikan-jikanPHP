<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserStatisticsData
{
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
     *
     * @return UserStatisticsDataAnime
     */
    public function getAnime(): UserStatisticsDataAnime
    {
        return $this->anime;
    }

    /**
     * Anime Statistics.
     *
     * @param UserStatisticsDataAnime $anime
     *
     * @return self
     */
    public function setAnime(UserStatisticsDataAnime $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * Manga Statistics.
     *
     * @return UserStatisticsDataManga
     */
    public function getManga(): UserStatisticsDataManga
    {
        return $this->manga;
    }

    /**
     * Manga Statistics.
     *
     * @param UserStatisticsDataManga $manga
     *
     * @return self
     */
    public function setManga(UserStatisticsDataManga $manga): self
    {
        $this->manga = $manga;

        return $this;
    }
}
