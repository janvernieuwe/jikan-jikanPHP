<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaStatisticsDataScoresItem
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
     *
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Scoring value.
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Number of votes for this score.
     *
     * @return int
     */
    public function getVotes(): int
    {
        return $this->votes;
    }

    /**
     * Number of votes for this score.
     *
     * @param int $votes
     *
     * @return self
     */
    public function setVotes(int $votes): self
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Percentage of votes for this score.
     *
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * Percentage of votes for this score.
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }
}
