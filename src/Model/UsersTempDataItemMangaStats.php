<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemMangaStats
{
    /**
     * Number of days spent reading Manga.
     *
     * @var float
     */
    protected $daysRead;
    /**
     * Mean Score.
     *
     * @var float
     */
    protected $meanScore;
    /**
     * Manga Reading.
     *
     * @var int
     */
    protected $reading;
    /**
     * Manga Completed.
     *
     * @var int
     */
    protected $completed;
    /**
     * Manga On-Hold.
     *
     * @var int
     */
    protected $onHold;
    /**
     * Manga Dropped.
     *
     * @var int
     */
    protected $dropped;
    /**
     * Manga Planned to Read.
     *
     * @var int
     */
    protected $planToRead;
    /**
     * Total Manga entries on User list.
     *
     * @var int
     */
    protected $totalEntries;
    /**
     * Manga re-read.
     *
     * @var int
     */
    protected $reread;
    /**
     * Number of Manga Chapters Read.
     *
     * @var int
     */
    protected $chaptersRead;
    /**
     * Number of Manga Volumes Read.
     *
     * @var int
     */
    protected $volumesRead;

    /**
     * Number of days spent reading Manga.
     *
     * @return float
     */
    public function getDaysRead(): float
    {
        return $this->daysRead;
    }

    /**
     * Number of days spent reading Manga.
     *
     * @param float $daysRead
     *
     * @return self
     */
    public function setDaysRead(float $daysRead): self
    {
        $this->daysRead = $daysRead;

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
     * Manga Reading.
     *
     * @return int
     */
    public function getReading(): int
    {
        return $this->reading;
    }

    /**
     * Manga Reading.
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
     * Manga Completed.
     *
     * @return int
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * Manga Completed.
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
     * Manga On-Hold.
     *
     * @return int
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * Manga On-Hold.
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
     * Manga Dropped.
     *
     * @return int
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * Manga Dropped.
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
     * Manga Planned to Read.
     *
     * @return int
     */
    public function getPlanToRead(): int
    {
        return $this->planToRead;
    }

    /**
     * Manga Planned to Read.
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
     * Total Manga entries on User list.
     *
     * @return int
     */
    public function getTotalEntries(): int
    {
        return $this->totalEntries;
    }

    /**
     * Total Manga entries on User list.
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
     * Manga re-read.
     *
     * @return int
     */
    public function getReread(): int
    {
        return $this->reread;
    }

    /**
     * Manga re-read.
     *
     * @param int $reread
     *
     * @return self
     */
    public function setReread(int $reread): self
    {
        $this->reread = $reread;

        return $this;
    }

    /**
     * Number of Manga Chapters Read.
     *
     * @return int
     */
    public function getChaptersRead(): int
    {
        return $this->chaptersRead;
    }

    /**
     * Number of Manga Chapters Read.
     *
     * @param int $chaptersRead
     *
     * @return self
     */
    public function setChaptersRead(int $chaptersRead): self
    {
        $this->chaptersRead = $chaptersRead;

        return $this;
    }

    /**
     * Number of Manga Volumes Read.
     *
     * @return int
     */
    public function getVolumesRead(): int
    {
        return $this->volumesRead;
    }

    /**
     * Number of Manga Volumes Read.
     *
     * @param int $volumesRead
     *
     * @return self
     */
    public function setVolumesRead(int $volumesRead): self
    {
        $this->volumesRead = $volumesRead;

        return $this;
    }
}
