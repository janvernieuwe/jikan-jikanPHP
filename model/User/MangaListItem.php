<?php

namespace Jikan\Model\User;

use Jikan\Model\Common\MagazineMeta;

/**
 * Class MangaListItem
 *
 * @package Jikan\Model
 */
class MangaListItem
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
    private $readingStatus;

    /**
     * @var float
     */
    private $score;

    /**
     * @var int
     */
    private $readChapters;

    /**
     * @var int
     */
    private $readVolumes;

    /**
     * @var int
     */
    private $totalChapters;

    /**
     * @var int
     */
    private $totalVolumes;

    /**
     * @var int
     */
    private $publishingStatus;

    /**
     * @var bool
     */
    private $isRereading;

    /**
     * @var string|null
     */
    private $tags;

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
    private $readStartDate;

    /**
     * @var \DateTimeImmutable|null
     */
    private $readEndDate;

    /**
     * @var string|null
     */
    private $days;

    /**
     * @var string|null
     */
    private $retail;

    /**
     * @var string
     */
    private $priority;

    /**
     * @var bool
     */
    private $addedToList;

    /**
     * @var MagazineMeta[]
     */
    private $magazines = [];

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
    public function getReadingStatus(): int
    {
        return $this->readingStatus;
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
    public function getReadChapters(): int
    {
        return $this->readChapters;
    }

    /**
     * @return int
     */
    public function getReadVolumes(): int
    {
        return $this->readVolumes;
    }

    /**
     * @return int
     */
    public function getTotalChapters(): int
    {
        return $this->totalChapters;
    }

    /**
     * @return int
     */
    public function getTotalVolumes(): int
    {
        return $this->totalVolumes;
    }

    /**
     * @return int
     */
    public function getPublishingStatus(): int
    {
        return $this->publishingStatus;
    }

    /**
     * @return bool
     */
    public function isRereading(): bool
    {
        return $this->isRereading;
    }

    /**
     * @return null|string
     */
    public function getTags(): ?string
    {
        return $this->tags;
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
    public function getReadStartDate(): ?\DateTimeImmutable
    {
        return $this->readStartDate;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getReadEndDate(): ?\DateTimeImmutable
    {
        return $this->readEndDate;
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
    public function getRetail(): ?string
    {
        return $this->retail;
    }

    /**
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }

    /**
     * @return bool
     */
    public function isAddedToList(): bool
    {
        return $this->addedToList;
    }

    /**
     * @return array
     */
    public function getMagazines(): array
    {
        return $this->magazines;
    }
}
