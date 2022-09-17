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
     *
     * @return UserProfileFullStatisticsAnime
     */
    public function getAnime(): UserProfileFullStatisticsAnime
    {
        return $this->anime;
    }

    /**
     * Anime Statistics.
     *
     * @param UserProfileFullStatisticsAnime $anime
     *
     * @return self
     */
    public function setAnime(UserProfileFullStatisticsAnime $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * Manga Statistics.
     *
     * @return UserProfileFullStatisticsManga
     */
    public function getManga(): UserProfileFullStatisticsManga
    {
        return $this->manga;
    }

    /**
     * Manga Statistics.
     *
     * @param UserProfileFullStatisticsManga $manga
     *
     * @return self
     */
    public function setManga(UserProfileFullStatisticsManga $manga): self
    {
        $this->manga = $manga;

        return $this;
    }
}
