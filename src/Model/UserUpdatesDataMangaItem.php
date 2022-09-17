<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserUpdatesDataMangaItem
{
    /**
     * @var MangaMeta
     */
    protected $entry;
    /**
     * @var int|null
     */
    protected $score;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var int|null
     */
    protected $chaptersRead;
    /**
     * @var int|null
     */
    protected $chaptersTotal;
    /**
     * @var int|null
     */
    protected $volumesRead;
    /**
     * @var int|null
     */
    protected $volumesTotal;
    /**
     * ISO8601 format.
     *
     * @var string
     */
    protected $date;

    /**
     * @return MangaMeta
     */
    public function getEntry(): MangaMeta
    {
        return $this->entry;
    }

    /**
     * @param MangaMeta $entry
     *
     * @return self
     */
    public function setEntry(MangaMeta $entry): self
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
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
     * @return int|null
     */
    public function getChaptersRead(): ?int
    {
        return $this->chaptersRead;
    }

    /**
     * @param int|null $chaptersRead
     *
     * @return self
     */
    public function setChaptersRead(?int $chaptersRead): self
    {
        $this->chaptersRead = $chaptersRead;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getChaptersTotal(): ?int
    {
        return $this->chaptersTotal;
    }

    /**
     * @param int|null $chaptersTotal
     *
     * @return self
     */
    public function setChaptersTotal(?int $chaptersTotal): self
    {
        $this->chaptersTotal = $chaptersTotal;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getVolumesRead(): ?int
    {
        return $this->volumesRead;
    }

    /**
     * @param int|null $volumesRead
     *
     * @return self
     */
    public function setVolumesRead(?int $volumesRead): self
    {
        $this->volumesRead = $volumesRead;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getVolumesTotal(): ?int
    {
        return $this->volumesTotal;
    }

    /**
     * @param int|null $volumesTotal
     *
     * @return self
     */
    public function setVolumesTotal(?int $volumesTotal): self
    {
        $this->volumesTotal = $volumesTotal;

        return $this;
    }

    /**
     * ISO8601 format.
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * ISO8601 format.
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
