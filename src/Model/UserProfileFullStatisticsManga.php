<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserProfileFullStatisticsManga extends \ArrayObject
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
     */
    public function getDaysRead(): float
    {
        return $this->daysRead;
    }

    /**
     * Number of days spent reading Manga.
     */
    public function setDaysRead(float $daysRead): self
    {
        $this->initialized['daysRead'] = true;
        $this->daysRead = $daysRead;

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
        $this->initialized['meanScore'] = true;
        $this->meanScore = $meanScore;

        return $this;
    }

    /**
     * Manga Reading.
     */
    public function getReading(): int
    {
        return $this->reading;
    }

    /**
     * Manga Reading.
     */
    public function setReading(int $reading): self
    {
        $this->initialized['reading'] = true;
        $this->reading = $reading;

        return $this;
    }

    /**
     * Manga Completed.
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * Manga Completed.
     */
    public function setCompleted(int $completed): self
    {
        $this->initialized['completed'] = true;
        $this->completed = $completed;

        return $this;
    }

    /**
     * Manga On-Hold.
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * Manga On-Hold.
     */
    public function setOnHold(int $onHold): self
    {
        $this->initialized['onHold'] = true;
        $this->onHold = $onHold;

        return $this;
    }

    /**
     * Manga Dropped.
     */
    public function getDropped(): int
    {
        return $this->dropped;
    }

    /**
     * Manga Dropped.
     */
    public function setDropped(int $dropped): self
    {
        $this->initialized['dropped'] = true;
        $this->dropped = $dropped;

        return $this;
    }

    /**
     * Manga Planned to Read.
     */
    public function getPlanToRead(): int
    {
        return $this->planToRead;
    }

    /**
     * Manga Planned to Read.
     */
    public function setPlanToRead(int $planToRead): self
    {
        $this->initialized['planToRead'] = true;
        $this->planToRead = $planToRead;

        return $this;
    }

    /**
     * Total Manga entries on User list.
     */
    public function getTotalEntries(): int
    {
        return $this->totalEntries;
    }

    /**
     * Total Manga entries on User list.
     */
    public function setTotalEntries(int $totalEntries): self
    {
        $this->initialized['totalEntries'] = true;
        $this->totalEntries = $totalEntries;

        return $this;
    }

    /**
     * Manga re-read.
     */
    public function getReread(): int
    {
        return $this->reread;
    }

    /**
     * Manga re-read.
     */
    public function setReread(int $reread): self
    {
        $this->initialized['reread'] = true;
        $this->reread = $reread;

        return $this;
    }

    /**
     * Number of Manga Chapters Read.
     */
    public function getChaptersRead(): int
    {
        return $this->chaptersRead;
    }

    /**
     * Number of Manga Chapters Read.
     */
    public function setChaptersRead(int $chaptersRead): self
    {
        $this->initialized['chaptersRead'] = true;
        $this->chaptersRead = $chaptersRead;

        return $this;
    }

    /**
     * Number of Manga Volumes Read.
     */
    public function getVolumesRead(): int
    {
        return $this->volumesRead;
    }

    /**
     * Number of Manga Volumes Read.
     */
    public function setVolumesRead(int $volumesRead): self
    {
        $this->initialized['volumesRead'] = true;
        $this->volumesRead = $volumesRead;

        return $this;
    }
}
