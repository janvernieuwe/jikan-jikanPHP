<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeStatisticsDataScoresItem extends ArrayObject
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
     * Scoring value.
     *
     * @var int
     */
    protected $score;

    /**
     * Number of votes for this score.
     *
     * @var int
     */
    protected $votes;

    /**
     * Percentage of votes for this score.
     *
     * @var float
     */
    protected $percentage;

    /**
     * Scoring value.
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Scoring value.
     */
    public function setScore(int $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * Number of votes for this score.
     */
    public function getVotes(): int
    {
        return $this->votes;
    }

    /**
     * Number of votes for this score.
     */
    public function setVotes(int $votes): self
    {
        $this->initialized['votes'] = true;
        $this->votes = $votes;

        return $this;
    }

    /**
     * Percentage of votes for this score.
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * Percentage of votes for this score.
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }
}
