<?php

namespace JikanPHP\Model\Common;

/**
 * Class MangaCardParser
 *
 * @package JikanPHP\Model
 */
class MangaCard
{
    /**
     * @var int
     */
    protected $malId;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $synopsis;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var \DateTimeImmutable|null
     */
    protected $publishingStart;

    /**
     * @var int|null
     */
    protected $volumes;

    /**
     * @var int
     */
    protected $members;

    /**
     * @var MalUrl[]
     */
    protected $genres;

    /**
     * @var MalUrl[]
     */
    protected $authors;

    /**
     * @var float|null
     */
    protected $score;

    /**
     * @var string[]|null
     */
    protected $serialization;

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->url;
    }

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
    public function getUrl(): string
    {
        return $this->url;
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
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getPublishingStart(): ?\DateTimeImmutable
    {
        return $this->publishingStart;
    }

    /**
     * @return int|null
     */
    public function getVolumes(): ?int
    {
        return $this->volumes;
    }

    /**
     * @return int
     */
    public function getMembers(): int
    {
        return $this->members;
    }

    /**
     * @return MalUrl[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @return MalUrl[]
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * @return string[]|null
     */
    public function getSerialization(): ?array
    {
        return $this->serialization;
    }
}
