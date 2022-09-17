<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaUserupdatesdataItem
{
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

    /**
     * @return UserMeta
     */
    public function getUser(): UserMeta
    {
        return $this->user;
    }

    /**
     * @param UserMeta $user
     *
     * @return self
     */
    public function setUser(UserMeta $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * User Score.
     *
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * User Score.
     *
     * @param int|null $score
     *
     * @return self
     */
    public function setScore(?int $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * User list status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * User list status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Number of volumes read.
     *
     * @return int
     */
    public function getVolumesRead(): int
    {
        return $this->volumesRead;
    }

    /**
     * Number of volumes read.
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

    /**
     * Total number of volumes.
     *
     * @return int
     */
    public function getVolumesTotal(): int
    {
        return $this->volumesTotal;
    }

    /**
     * Total number of volumes.
     *
     * @param int $volumesTotal
     *
     * @return self
     */
    public function setVolumesTotal(int $volumesTotal): self
    {
        $this->volumesTotal = $volumesTotal;

        return $this;
    }

    /**
     * Number of chapters read.
     *
     * @return int
     */
    public function getChaptersRead(): int
    {
        return $this->chaptersRead;
    }

    /**
     * Number of chapters read.
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
     * Total number of chapters.
     *
     * @return int
     */
    public function getChaptersTotal(): int
    {
        return $this->chaptersTotal;
    }

    /**
     * Total number of chapters.
     *
     * @param int $chaptersTotal
     *
     * @return self
     */
    public function setChaptersTotal(int $chaptersTotal): self
    {
        $this->chaptersTotal = $chaptersTotal;

        return $this;
    }

    /**
     * Last updated date ISO8601.
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Last updated date ISO8601.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
