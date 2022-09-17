<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserProfileFullStatisticsAnime
{
    /**
     * Number of days spent watching Anime.
     *
     * @var float
     */
    protected $daysWatched;
    /**
     * Mean Score.
     *
     * @var float
     */
    protected $meanScore;
    /**
     * Anime Watching.
     *
     * @var int
     */
    protected $watching;
    /**
     * Anime Completed.
     *
     * @var int
     */
    protected $completed;
    /**
     * Anime On-Hold.
     *
     * @var int
     */
    protected $onHold;
    /**
     * Anime Dropped.
     *
     * @var int
     */
    protected $dropped;
    /**
     * Anime Planned to Watch.
     *
     * @var int
     */
    protected $planToWatch;
    /**
     * Total Anime entries on User list.
     *
     * @var int
     */
    protected $totalEntries;
    /**
     * Anime re-watched.
     *
     * @var int
     */
    protected $rewatched;
    /**
     * Number of Anime Episodes Watched.
     *
     * @var int
     */
    protected $episodesWatched;

    /**
     * Number of days spent watching Anime.
     *
     * @return float
     */
    public function getDaysWatched(): float
    {
        return $this->daysWatched;
    }

    /**
     * Number of days spent watching Anime.
     *
     * @param float $daysWatched
     *
     * @return self
     */
    public function setDaysWatched(float $daysWatched): self
    {
        $this->daysWatched = $daysWatched;

        return $this;
    }

    /**
     * Mean Score.
     *
     * @return float
     */
    public function getMeanScore(): float
    {
        return $this->meanScore;
    }

    /**
     * Mean Score.
     *
     * @param float $meanScore
     *
     * @return self
     */
    public function setMeanScore(float $meanScore): self
    {
        $this->meanScore = $meanScore;

        return $this;
    }

    /**
     * Anime Watching.
     *
     * @return int
     */
    public function getWatching(): int
    {
        return $this->watching;
    }

    /**
     * Anime Watching.
     *
     * @param int $watching
     *
     * @return self
     */
    public function setWatching(int $watching): self
    {
        $this->watching = $watching;

        return $this;
    }

    /**
     * Anime Completed.
     *
     * @return int
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * Anime Completed.
     *
     * @param int $completed
     *
     * @return self
     */
    public function setCompleted(int $completed): self
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Anime On-Hold.
     *
     * @return int
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * Anime On-Hold.
     *
     * @param int $onHold
     *
     * @return self
     */
    public function setOnHold(int $onHold): self
    {
        $this->onHold = $onHold;

        return $this;
    }

    /**
     * Anime Dropped.
     *
     * @return int
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * Anime Dropped.
     *
     * @param int $dropped
     *
     * @return self
     */
    public function setDropped(int $dropped): self
    {
        $this->dropped = $dropped;

        return $this;
    }

    /**
     * Anime Planned to Watch.
     *
     * @return int
     */
    public function getPlanToWatch(): int
    {
        return $this->planToWatch;
    }

    /**
     * Anime Planned to Watch.
     *
     * @param int $planToWatch
     *
     * @return self
     */
    public function setPlanToWatch(int $planToWatch): self
    {
        $this->planToWatch = $planToWatch;

        return $this;
    }

    /**
     * Total Anime entries on User list.
     *
     * @return int
     */
    public function getTotalEntries(): int
    {
        return $this->totalEntries;
    }

    /**
     * Total Anime entries on User list.
     *
     * @param int $totalEntries
     *
     * @return self
     */
    public function setTotalEntries(int $totalEntries): self
    {
        $this->totalEntries = $totalEntries;

        return $this;
    }

    /**
     * Anime re-watched.
     *
     * @return int
     */
    public function getRewatched(): int
    {
        return $this->rewatched;
    }

    /**
     * Anime re-watched.
     *
     * @param int $rewatched
     *
     * @return self
     */
    public function setRewatched(int $rewatched): self
    {
        $this->rewatched = $rewatched;

        return $this;
    }

    /**
     * Number of Anime Episodes Watched.
     *
     * @return int
     */
    public function getEpisodesWatched(): int
    {
        return $this->episodesWatched;
    }

    /**
     * Number of Anime Episodes Watched.
     *
     * @param int $episodesWatched
     *
     * @return self
     */
    public function setEpisodesWatched(int $episodesWatched): self
    {
        $this->episodesWatched = $episodesWatched;

        return $this;
    }
}
