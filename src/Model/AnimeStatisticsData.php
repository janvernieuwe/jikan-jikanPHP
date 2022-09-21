<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStatisticsData
{
    /**
     * Number of users watching the resource.
     *
     * @var int
     */
    protected $watching;

    /**
     * Number of users who have completed the resource.
     *
     * @var int
     */
    protected $completed;

    /**
     * Number of users who have put the resource on hold.
     *
     * @var int
     */
    protected $onHold;

    /**
     * Number of users who have dropped the resource.
     *
     * @var int
     */
    protected $dropped;

    /**
     * Number of users who have planned to watch the resource.
     *
     * @var int
     */
    protected $planToWatch;

    /**
     * Total number of users who have the resource added to their lists.
     *
     * @var int
     */
    protected $total;

    /**
     * @var AnimeStatisticsDataScoresItem[]
     */
    protected $scores = [];

    /**
     * Number of users watching the resource.
     */
    public function getWatching(): int
    {
        return $this->watching;
    }

    /**
     * Number of users watching the resource.
     */
    public function setWatching(int $watching): self
    {
        $this->watching = $watching;

        return $this;
    }

    /**
     * Number of users who have completed the resource.
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * Number of users who have completed the resource.
     */
    public function setCompleted(int $completed): self
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Number of users who have put the resource on hold.
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * Number of users who have put the resource on hold.
     */
    public function setOnHold(int $onHold): self
    {
        $this->onHold = $onHold;

        return $this;
    }

    /**
     * Number of users who have dropped the resource.
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * Number of users who have dropped the resource.
     */
    public function setDropped(int $dropped): self
    {
        $this->dropped = $dropped;

        return $this;
    }

    /**
     * Number of users who have planned to watch the resource.
     */
    public function getPlanToWatch(): int
    {
        return $this->planToWatch;
    }

    /**
     * Number of users who have planned to watch the resource.
     */
    public function setPlanToWatch(int $planToWatch): self
    {
        $this->planToWatch = $planToWatch;

        return $this;
    }

    /**
     * Total number of users who have the resource added to their lists.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Total number of users who have the resource added to their lists.
     */
    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return AnimeStatisticsDataScoresItem[]
     */
    public function getScores(): array
    {
        return $this->scores;
    }

    /**
     * @param AnimeStatisticsDataScoresItem[] $scores
     */
    public function setScores(array $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}
