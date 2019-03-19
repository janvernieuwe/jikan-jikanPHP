<?php

namespace JikanPHP\Model\Anime;

/**
 * Class AnimeStats
 *
 * @package JikanPHP\Model
 */
class AnimeStats
{
    /**
     * @var int
     */
    private $watching;

    /**
     * @var int
     */
    private $completed;

    /**
     * @var int
     */
    private $onHold;

    /**
     * @var int
     */
    private $dropped;

    /**
     * @var int
     */
    private $planToWatch;

    /**
     * @var int
     */
    private $total;

    /**
     * @var int
     */
    private $scores;

    /**
     * @return int
     */
    public function getWatching(): int
    {
        return $this->watching;
    }

    /**
     * @return int
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * @return int
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * @return int
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * @return int
     */
    public function getPlanToWatch(): int
    {
        return $this->planToWatch;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getScores(): int
    {
        return $this->scores;
    }
}
