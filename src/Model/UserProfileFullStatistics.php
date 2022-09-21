<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserProfileFullStatistics
{
    /**
     * Anime Statistics.
     *
     * @var UserProfileFullStatisticsAnime
     */
    protected $anime;

    /**
     * Manga Statistics.
     *
     * @var UserProfileFullStatisticsManga
     */
    protected $manga;

    /**
     * Anime Statistics.
     */
    public function getAnime(): UserProfileFullStatisticsAnime
    {
        return $this->anime;
    }

    /**
     * Anime Statistics.
     */
    public function setAnime(UserProfileFullStatisticsAnime $userProfileFullStatisticsAnime): self
    {
        $this->anime = $userProfileFullStatisticsAnime;

        return $this;
    }

    /**
     * Manga Statistics.
     */
    public function getManga(): UserProfileFullStatisticsManga
    {
        return $this->manga;
    }

    /**
     * Manga Statistics.
     */
    public function setManga(UserProfileFullStatisticsManga $userProfileFullStatisticsManga): self
    {
        $this->manga = $userProfileFullStatisticsManga;

        return $this;
    }
}
