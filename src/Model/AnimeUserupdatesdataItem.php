<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeUserupdatesdataItem extends ArrayObject
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
     * Number of episodes seen.
     *
     * @var int|null
     */
    protected $episodesSeen;

    /**
     * Total number of episodes.
     *
     * @var int|null
     */
    protected $episodesTotal;

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
     * Number of episodes seen.
     */
    public function getEpisodesSeen(): ?int
    {
        return $this->episodesSeen;
    }

    /**
     * Number of episodes seen.
     */
    public function setEpisodesSeen(?int $episodesSeen): self
    {
        $this->initialized['episodesSeen'] = true;
        $this->episodesSeen = $episodesSeen;

        return $this;
    }

    /**
     * Total number of episodes.
     */
    public function getEpisodesTotal(): ?int
    {
        return $this->episodesTotal;
    }

    /**
     * Total number of episodes.
     */
    public function setEpisodesTotal(?int $episodesTotal): self
    {
        $this->initialized['episodesTotal'] = true;
        $this->episodesTotal = $episodesTotal;

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
