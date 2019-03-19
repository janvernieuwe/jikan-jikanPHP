<?php

namespace JikanPHP\Model\Anime;

/**
 * Class AnimeRecentlyUpdatedByUser
 *
 * @package JikanPHP\Model\Anime\AnimeRecentlyUpdatedByUser
 */
class AnimeRecentlyUpdatedByUser
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var int|null
     */
    private $score;

    /**
     * @var string
     */
    private $status;

    /**
     * @var int|null
     */
    private $episodesSeen;

    /**
     * @var int|null
     */
    private $episodesTotal;

    /**
     * @var \DateTimeImmutable
     */
    private $date;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getEpisodesSeen(): ?int
    {
        return $this->episodesSeen;
    }

    /**
     * @return int|null
     */
    public function getEpisodesTotal(): ?int
    {
        return $this->episodesTotal;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }
}
