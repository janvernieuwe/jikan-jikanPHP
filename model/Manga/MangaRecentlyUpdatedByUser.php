<?php

namespace Jikan\Model\Manga;

/**
 * Class MangaRecentlyUpdatedByUser
 *
 * @package Jikan\Model\Manga\MangaRecentlyUpdatedByUser
 */
class MangaRecentlyUpdatedByUser
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
    private $volumesRead;

    /**
     * @var int|null
     */
    private $volumesTotal;

    /**
     * @var int|null
     */
    private $chaptersRead;

    /**
     * @var int|null
     */
    private $chaptersTotal;

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
    public function getVolumesRead(): ?int
    {
        return $this->volumesRead;
    }

    /**
     * @return int|null
     */
    public function getVolumesTotal(): ?int
    {
        return $this->volumesTotal;
    }

    /**
     * @return int|null
     */
    public function getChaptersRead(): ?int
    {
        return $this->chaptersRead;
    }

    /**
     * @return int|null
     */
    public function getChaptersTotal(): ?int
    {
        return $this->chaptersTotal;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }
}
