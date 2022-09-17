<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeUserupdatesdataItem
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
     * Number of episodes seen.
     *
     * @return int|null
     */
    public function getEpisodesSeen(): ?int
    {
        return $this->episodesSeen;
    }

    /**
     * Number of episodes seen.
     *
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
     * Total number of episodes.
     *
     * @return int|null
     */
    public function getEpisodesTotal(): ?int
    {
        return $this->episodesTotal;
    }

    /**
     * Total number of episodes.
     *
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
