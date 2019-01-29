<?php

namespace Jikan\Model\Person;

/**
 * Class Person
 *
 * @package Jikan\Model
 */
class Person
{
    /**
     * @var int
     */
    public $malId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string|null
     */
    public $websiteUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string|null
     */
    public $givenName;

    /**
     * @var string|null
     */
    public $familyName;

    /**
     * @var string[]
     */
    public $alternateNames;

    /**
     * @var \DateTimeImmutable|null
     */
    public $birthday;

    /**
     * @var int
     */
    public $memberFavorites;

    /**
     * @var string|null
     */
    public $about;

    /**
     * @var VoiceActingRole[]
     */
    public $voiceActingRoles = [];

    /**
     * @var AnimeStaffPosition[]
     */
    public $animeStaffPositions = [];

    /**
     * @var PublishedManga[]
     */
    public $publishedManga = [];

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
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string|null
     */
    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * @return string|null
     */
    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    /**
     * @return string[]
     */
    public function getAlternateNames(): array
    {
        return $this->alternateNames;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    /**
     * @return int
     */
    public function getMemberFavorites(): int
    {
        return $this->memberFavorites;
    }

    /**
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @return VoiceActingRole[]
     */
    public function getVoiceActingRoles(): array
    {
        return $this->voiceActingRoles;
    }

    /**
     * @param VoiceActingRole[] $voiceActingRoles
     */
    public function setVoiceActingRoles(array $voiceActingRoles): void
    {
        $this->voiceActingRoles = $voiceActingRoles;
    }

    /**
     * @return AnimeStaffPosition[]
     */
    public function getAnimeStaffPositions(): array
    {
        return $this->animeStaffPositions;
    }

    /**
     * @param AnimeStaffPosition[] $animeStaffPositions
     */
    public function setAnimeStaffPositions(array $animeStaffPositions): void
    {
        $this->animeStaffPositions = $animeStaffPositions;
    }

    /**
     * @return PublishedManga[]
     */
    public function getPublishedManga(): array
    {
        return $this->publishedManga;
    }

    /**
     * @param PublishedManga[] $publishedManga
     */
    public function setPublishedManga(array $publishedManga): void
    {
        $this->publishedManga = $publishedManga;
    }
}
