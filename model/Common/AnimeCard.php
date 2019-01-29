<?php

namespace Jikan\Model\Common;

/**
 * Class AnimeCardParser
 *
 * @package Jikan\Model
 */
class AnimeCard
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
    protected $airingStart;

    /**
     * @var int|null
     */
    protected $episodes;

    /**
     * @var int
     */
    protected $members;

    /**
     * @var \Jikan\Model\Common\MalUrl[]
     */
    protected $genres;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var \Jikan\Model\Common\MalUrl[]
     */
    protected $producers;

    /**
     * @var float|null
     */
    protected $score;

    /**
     * @var string[]|null
     */
    protected $licensors;

    /**
     * @var bool
     */
    protected $r18;

    /**
     * @var bool
     */
    protected $kids;

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
    public function getAiringStart(): ?\DateTimeImmutable
    {
        return $this->airingStart;
    }

    /**
     * @return int|null
     */
    public function getEpisodes(): ?int
    {
        return $this->episodes;
    }

    /**
     * @return int
     */
    public function getMembers(): int
    {
        return $this->members;
    }

    /**
     * @return \Jikan\Model\Common\MalUrl[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return \Jikan\Model\Common\MalUrl[]
     */
    public function getProducers(): array
    {
        return $this->producers;
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
    public function getLicensors(): ?array
    {
        return $this->licensors;
    }

    /**
     * @return bool
     */
    public function isR18(): bool
    {
        return $this->r18;
    }

    /**
     * @return bool
     */
    public function isKids(): bool
    {
        return $this->kids;
    }
}
