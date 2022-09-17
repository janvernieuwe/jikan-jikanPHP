<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaStatisticsData
{
    /**
     * Number of users reading the resource.
     *
     * @var int
     */
    protected $reading;
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
     * Number of users who have planned to read the resource.
     *
     * @var int
     */
    protected $planToRead;
    /**
     * Total number of users who have the resource added to their lists.
     *
     * @var int
     */
    protected $total;
    /**
     * @var MangaStatisticsDataScoresItem[]
     */
    protected $scores;

    /**
     * Number of users reading the resource.
     *
     * @return int
     */
    public function getReading(): int
    {
        return $this->reading;
    }

    /**
     * Number of users reading the resource.
     *
     * @param int $reading
     *
     * @return self
     */
    public function setReading(int $reading): self
    {
        $this->reading = $reading;

        return $this;
    }

    /**
     * Number of users who have completed the resource.
     *
     * @return int
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * Number of users who have completed the resource.
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
     * Number of users who have put the resource on hold.
     *
     * @return int
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * Number of users who have put the resource on hold.
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
     * Number of users who have dropped the resource.
     *
     * @return int
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * Number of users who have dropped the resource.
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
     * Number of users who have planned to read the resource.
     *
     * @return int
     */
    public function getPlanToRead(): int
    {
        return $this->planToRead;
    }

    /**
     * Number of users who have planned to read the resource.
     *
     * @param int $planToRead
     *
     * @return self
     */
    public function setPlanToRead(int $planToRead): self
    {
        $this->planToRead = $planToRead;

        return $this;
    }

    /**
     * Total number of users who have the resource added to their lists.
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Total number of users who have the resource added to their lists.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return MangaStatisticsDataScoresItem[]
     */
    public function getScores(): array
    {
        return $this->scores;
    }

    /**
     * @param MangaStatisticsDataScoresItem[] $scores
     *
     * @return self
     */
    public function setScores(array $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}
