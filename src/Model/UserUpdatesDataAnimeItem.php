<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserUpdatesDataAnimeItem
{
    /**
     * @var AnimeMeta
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
    protected $episodesSeen;

    /**
     * @var int|null
     */
    protected $episodesTotal;

    /**
     * ISO8601 format.
     *
     * @var string
     */
    protected $date;

    public function getEntry(): AnimeMeta
    {
        return $this->entry;
    }

    public function setEntry(AnimeMeta $animeMeta): self
    {
        $this->entry = $animeMeta;

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

    public function getEpisodesSeen(): ?int
    {
        return $this->episodesSeen;
    }

    public function setEpisodesSeen(?int $episodesSeen): self
    {
        $this->episodesSeen = $episodesSeen;

        return $this;
    }

    public function getEpisodesTotal(): ?int
    {
        return $this->episodesTotal;
    }

    public function setEpisodesTotal(?int $episodesTotal): self
    {
        $this->episodesTotal = $episodesTotal;

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
