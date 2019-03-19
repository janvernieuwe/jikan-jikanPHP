<?php

namespace JikanPHP\Model\User;

/**
 * Class Profile
 *
 * @package JikanPHP\Model
 */
class Profile
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
     * @var string|null
     */
    private $imageUrl;

    /**
     * @var \DateTimeImmutable
     */
    private $lastOnline;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var \DateTimeImmutable|null
     */
    private $birthday;

    /**
     * @var string|null
     */
    private $location;

    /**
     * @var \DateTimeImmutable|null
     */
    private $joined;

    /**
     * @var UserAnimeStats
     */
    private $animeStats;

    /**
     * @var UserMangaStats
     */
    private $mangaStats;

    /**
     * @var Favorites
     */
    private $favorites;

    /**
     * @var string|null
     */
    private $about;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getLastOnline(): \DateTimeImmutable
    {
        return $this->lastOnline;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getJoined(): ?\DateTimeImmutable
    {
        return $this->joined;
    }

    /**
     * @return UserAnimeStats
     */
    public function getAnimeStats(): UserAnimeStats
    {
        return $this->animeStats;
    }

    /**
     * @return UserMangaStats
     */
    public function getMangaStats(): UserMangaStats
    {
        return $this->mangaStats;
    }

    /**
     * @return Favorites
     */
    public function getFavorites(): Favorites
    {
        return $this->favorites;
    }

    /**
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return null|string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
}
