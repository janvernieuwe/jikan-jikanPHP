<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemAnimeStats
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
     */
    public function getDaysWatched(): float
    {
        return $this->daysWatched;
    }

    /**
     * Number of days spent watching Anime.
     */
    public function setDaysWatched(float $daysWatched): self
    {
        $this->daysWatched = $daysWatched;

        return $this;
    }

    /**
     * Mean Score.
     */
    public function getMeanScore(): float
    {
        return $this->meanScore;
    }

    /**
     * Mean Score.
     */
    public function setMeanScore(float $meanScore): self
    {
        $this->meanScore = $meanScore;

        return $this;
    }

    /**
     * Anime Watching.
     */
    public function getWatching(): int
    {
        return $this->watching;
    }

    /**
     * Anime Watching.
     */
    public function setWatching(int $watching): self
    {
        $this->watching = $watching;

        return $this;
    }

    /**
     * Anime Completed.
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * Anime Completed.
     */
    public function setCompleted(int $completed): self
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Anime On-Hold.
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * Anime On-Hold.
     */
    public function setOnHold(int $onHold): self
    {
        $this->onHold = $onHold;

        return $this;
    }

    /**
     * Anime Dropped.
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * Anime Dropped.
     */
    public function setDropped(int $dropped): self
    {
        $this->dropped = $dropped;

        return $this;
    }

    /**
     * Anime Planned to Watch.
     */
    public function getPlanToWatch(): int
    {
        return $this->planToWatch;
    }

    /**
     * Anime Planned to Watch.
     */
    public function setPlanToWatch(int $planToWatch): self
    {
        $this->planToWatch = $planToWatch;

        return $this;
    }

    /**
     * Total Anime entries on User list.
     */
    public function getTotalEntries(): int
    {
        return $this->totalEntries;
    }

    /**
     * Total Anime entries on User list.
     */
    public function setTotalEntries(int $totalEntries): self
    {
        $this->totalEntries = $totalEntries;

        return $this;
    }

    /**
     * Anime re-watched.
     */
    public function getRewatched(): int
    {
        return $this->rewatched;
    }

    /**
     * Anime re-watched.
     */
    public function setRewatched(int $rewatched): self
    {
        $this->rewatched = $rewatched;

        return $this;
    }

    /**
     * Number of Anime Episodes Watched.
     */
    public function getEpisodesWatched(): int
    {
        return $this->episodesWatched;
    }

    /**
     * Number of Anime Episodes Watched.
     */
    public function setEpisodesWatched(int $episodesWatched): self
    {
        $this->episodesWatched = $episodesWatched;

        return $this;
    }
}
