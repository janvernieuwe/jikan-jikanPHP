<?php

namespace JikanPHP\Model\User;

use JikanPHP\Model\Common\LicensorMeta;
use JikanPHP\Model\Common\StudioMeta;

/**
 * Class AnimeListItem
 *
 * @package JikanPHP\Model
 */
class AnimeListItem
{
    /**
     * @var int
     */
    private $malId;


    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $videoUrl;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $watchingStatus;

    /**
     * @var float
     */
    private $score;

    /**
     * @var int
     */
    private $watchedEpisodes;

    /**
     * @var int
     */
    private $totalEpisodes;

    /**
     * @var int
     */
    private $airingStatus;

    /**
     * @var string|null
     */
    private $seasonName;

    /**
     * @var int|null
     */
    private $seasonYear;

    /**
     * @var bool
     */
    private $hasEpisodeVideo;

    /**
     * @var bool
     */
    private $hasPromoVideo;

    /**
     * @var bool
     */
    private $hasVideo;

    /**
     * @var bool
     */
    private $isRewatching;

    /**
     * @var string|null
     */
    private $tags;

    /**
     * @var string|null
     */
    private $rating;

    /**
     * @var \DateTimeImmutable|null
     */
    private $startDate;

    /**
     * @var \DateTimeImmutable|null
     */
    private $endDate;

    /**
     * @var \DateTimeImmutable|null
     */
    private $watchStartDate;

    /**
     * @var \DateTimeImmutable|null
     */
    private $watchEndDate;

    /**
     * @var string|null
     */
    private $days;

    /**
     * @var string|null
     */
    private $storage;

    /**
     * @var string
     */
    private $priority;

    /**
     * @var bool
     */
    private $addedToList;

    /**
     * @var StudioMeta[]
     */
    private $studios = [];

    /**
     * @var LicensorMeta[]
     */
    private $licensors = [];

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getWatchingStatus(): int
    {
        return $this->watchingStatus;
    }

    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }

    /**
     * @return int
     */
    public function getWatchedEpisodes(): int
    {
        return $this->watchedEpisodes;
    }

    /**
     * @return int
     */
    public function getTotalEpisodes(): int
    {
        return $this->totalEpisodes;
    }

    /**
     * @return int
     */
    public function getAiringStatus(): int
    {
        return $this->airingStatus;
    }

    /**
     * @return string|null
     */
    public function getSeasonName(): ?string
    {
        return $this->seasonName;
    }

    /**
     * @return int|null
     */
    public function getSeasonYear(): ?int
    {
        return $this->seasonYear;
    }

    /**
     * @return bool
     */
    public function isHasEpisodeVideo(): bool
    {
        return $this->hasEpisodeVideo;
    }

    /**
     * @return bool
     */
    public function isHasPromoVideo(): bool
    {
        return $this->hasPromoVideo;
    }

    /**
     * @return bool
     */
    public function isHasVideo(): bool
    {
        return $this->hasVideo;
    }

    /**
     * @return bool
     */
    public function isRewatching(): bool
    {
        return $this->isRewatching;
    }

    /**
     * @return null|string
     */
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @return null|string
     */
    public function getRating(): ?string
    {
        return $this->rating;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getWatchStartDate(): ?\DateTimeImmutable
    {
        return $this->watchStartDate;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getWatchEndDate(): ?\DateTimeImmutable
    {
        return $this->watchEndDate;
    }

    /**
     * @return null|string
     */
    public function getDays(): ?string
    {
        return $this->days;
    }

    /**
     * @return null|string
     */
    public function getStorage(): ?string
    {
        return $this->storage;
    }

    /**
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }

    /**
     * @return array
     */
    public function getStudios(): array
    {
        return $this->studios;
    }

    /**
     * @return array
     */
    public function getLicensors(): array
    {
        return $this->licensors;
    }

    /**
     * @return bool
     */
    public function isAddedToList(): bool
    {
        return $this->addedToList;
    }
}
