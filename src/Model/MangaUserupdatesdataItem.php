<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaUserupdatesdataItem extends \ArrayObject
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
     * @var UserMeta
     */
    protected $user;

    /**
     * User Score.
     *
     * @var int|null
     */
    protected $score;

    /**
     * User list status.
     *
     * @var string
     */
    protected $status;

    /**
     * Number of volumes read.
     *
     * @var int
     */
    protected $volumesRead;

    /**
     * Total number of volumes.
     *
     * @var int
     */
    protected $volumesTotal;

    /**
     * Number of chapters read.
     *
     * @var int
     */
    protected $chaptersRead;

    /**
     * Total number of chapters.
     *
     * @var int
     */
    protected $chaptersTotal;

    /**
     * Last updated date ISO8601.
     *
     * @var string
     */
    protected $date;

    public function getUser(): UserMeta
    {
        return $this->user;
    }

    public function setUser(UserMeta $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    /**
     * User Score.
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * User Score.
     */
    public function setScore(?int $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * User list status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * User list status.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Number of volumes read.
     */
    public function getVolumesRead(): int
    {
        return $this->volumesRead;
    }

    /**
     * Number of volumes read.
     */
    public function setVolumesRead(int $volumesRead): self
    {
        $this->initialized['volumesRead'] = true;
        $this->volumesRead = $volumesRead;

        return $this;
    }

    /**
     * Total number of volumes.
     */
    public function getVolumesTotal(): int
    {
        return $this->volumesTotal;
    }

    /**
     * Total number of volumes.
     */
    public function setVolumesTotal(int $volumesTotal): self
    {
        $this->initialized['volumesTotal'] = true;
        $this->volumesTotal = $volumesTotal;

        return $this;
    }

    /**
     * Number of chapters read.
     */
    public function getChaptersRead(): int
    {
        return $this->chaptersRead;
    }

    /**
     * Number of chapters read.
     */
    public function setChaptersRead(int $chaptersRead): self
    {
        $this->initialized['chaptersRead'] = true;
        $this->chaptersRead = $chaptersRead;

        return $this;
    }

    /**
     * Total number of chapters.
     */
    public function getChaptersTotal(): int
    {
        return $this->chaptersTotal;
    }

    /**
     * Total number of chapters.
     */
    public function setChaptersTotal(int $chaptersTotal): self
    {
        $this->initialized['chaptersTotal'] = true;
        $this->chaptersTotal = $chaptersTotal;

        return $this;
    }

    /**
     * Last updated date ISO8601.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Last updated date ISO8601.
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
