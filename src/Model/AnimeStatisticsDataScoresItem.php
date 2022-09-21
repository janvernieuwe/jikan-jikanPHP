<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStatisticsDataScoresItem
{
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
        $this->percentage = $percentage;

        return $this;
    }
}
