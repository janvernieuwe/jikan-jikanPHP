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

    /**
     * @return AnimeMeta
     */
    public function getEntry(): AnimeMeta
    {
        return $this->entry;
    }

    /**
     * @param AnimeMeta $entry
     *
     * @return self
     */
    public function setEntry(AnimeMeta $entry): self
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
    public function getEpisodesSeen(): ?int
    {
        return $this->episodesSeen;
    }

    /**
     * @param int|null $episodesSeen
     *
     * @return self
     */
    public function setEpisodesSeen(?int $episodesSeen): self
    {
        $this->episodesSeen = $episodesSeen;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEpisodesTotal(): ?int
    {
        return $this->episodesTotal;
    }

    /**
     * @param int|null $episodesTotal
     *
     * @return self
     */
    public function setEpisodesTotal(?int $episodesTotal): self
    {
        $this->episodesTotal = $episodesTotal;

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
