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
     */
    public function getAnime(): UserStatisticsDataAnime
    {
        return $this->anime;
    }

    /**
     * Anime Statistics.
     */
    public function setAnime(UserStatisticsDataAnime $userStatisticsDataAnime): self
    {
        $this->anime = $userStatisticsDataAnime;

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
    public function setManga(UserStatisticsDataManga $userStatisticsDataManga): self
    {
        $this->manga = $userStatisticsDataManga;

        return $this;
    }
}
