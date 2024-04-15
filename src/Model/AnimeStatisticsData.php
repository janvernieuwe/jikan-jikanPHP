<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStatisticsData extends \ArrayObject
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
     * @var list<AnimeStatisticsDataScoresItem>
     */
    protected $scores;

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
        $this->initialized['watching'] = true;
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
        $this->initialized['completed'] = true;
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
        $this->initialized['onHold'] = true;
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
        $this->initialized['dropped'] = true;
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
        $this->initialized['planToWatch'] = true;
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
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * @return list<AnimeStatisticsDataScoresItem>
     */
    public function getScores(): array
    {
        return $this->scores;
    }

    /**
     * @param list<AnimeStatisticsDataScoresItem> $scores
     */
    public function setScores(array $scores): self
    {
        $this->initialized['scores'] = true;
        $this->scores = $scores;

        return $this;
    }
}
