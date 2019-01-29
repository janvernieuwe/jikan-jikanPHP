<?php

namespace Jikan\Model\Manga;

/**
 * Class MangaStats
 *
 * @package Jikan\Model\Anime\Anime
 */
class MangaStats
{
    /**
     * @var int
     */
    private $reading;

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
    private $planToRead;

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
    public function getReading(): int
    {
        return $this->reading;
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
    public function getPlanToRead(): int
    {
        return $this->planToRead;
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
