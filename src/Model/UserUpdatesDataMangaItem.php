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

    public function getEntry(): MangaMeta
    {
        return $this->entry;
    }

    public function setEntry(MangaMeta $mangaMeta): self
    {
        $this->entry = $mangaMeta;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getChaptersRead(): ?int
    {
        return $this->chaptersRead;
    }

    public function setChaptersRead(?int $chaptersRead): self
    {
        $this->chaptersRead = $chaptersRead;

        return $this;
    }

    public function getChaptersTotal(): ?int
    {
        return $this->chaptersTotal;
    }

    public function setChaptersTotal(?int $chaptersTotal): self
    {
        $this->chaptersTotal = $chaptersTotal;

        return $this;
    }

    public function getVolumesRead(): ?int
    {
        return $this->volumesRead;
    }

    public function setVolumesRead(?int $volumesRead): self
    {
        $this->volumesRead = $volumesRead;

        return $this;
    }

    public function getVolumesTotal(): ?int
    {
        return $this->volumesTotal;
    }

    public function setVolumesTotal(?int $volumesTotal): self
    {
        $this->volumesTotal = $volumesTotal;

        return $this;
    }

    /**
     * ISO8601 format.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * ISO8601 format.
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
