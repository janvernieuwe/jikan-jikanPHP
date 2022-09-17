<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItem
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;
    /**
     * MyAnimeList Username.
     *
     * @var string
     */
    protected $username;
    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;
    /**
     * Images.
     *
     * @var UsersTempDataItemImages
     */
    protected $images;
    /**
     * Last Online Date ISO8601.
     *
     * @var string
     */
    protected $lastOnline;
    /**
     * User Gender.
     *
     * @var string
     */
    protected $gender;
    /**
     * Birthday Date ISO8601.
     *
     * @var string
     */
    protected $birthday;
    /**
     * Location.
     *
     * @var string
     */
    protected $location;
    /**
     * Joined Date ISO8601.
     *
     * @var string
     */
    protected $joined;
    /**
     * Anime Stats.
     *
     * @var UsersTempDataItemAnimeStats
     */
    protected $animeStats;
    /**
     * Manga Stats.
     *
     * @var UsersTempDataItemMangaStats
     */
    protected $mangaStats;
    /**
     * Favorite entries.
     *
     * @var UsersTempDataItemFavorites
     */
    protected $favorites;
    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     *
     * @var string
     */
    protected $about;

    /**
     * MyAnimeList ID.
     *
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     *
     * @param int $malId
     *
     * @return self
     */
    public function setMalId(int $malId): self
    {
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList Username.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * MyAnimeList Username.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * MyAnimeList URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Images.
     *
     * @return UsersTempDataItemImages
     */
    public function getImages(): UsersTempDataItemImages
    {
        return $this->images;
    }

    /**
     * Images.
     *
     * @param UsersTempDataItemImages $images
     *
     * @return self
     */
    public function setImages(UsersTempDataItemImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Last Online Date ISO8601.
     *
     * @return string
     */
    public function getLastOnline(): string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601.
     *
     * @param string $lastOnline
     *
     * @return self
     */
    public function setLastOnline(string $lastOnline): self
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * User Gender.
     *
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * User Gender.
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Birthday Date ISO8601.
     *
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * Birthday Date ISO8601.
     *
     * @param string $birthday
     *
     * @return self
     */
    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Location.
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Location.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Joined Date ISO8601.
     *
     * @return string
     */
    public function getJoined(): string
    {
        return $this->joined;
    }

    /**
     * Joined Date ISO8601.
     *
     * @param string $joined
     *
     * @return self
     */
    public function setJoined(string $joined): self
    {
        $this->joined = $joined;

        return $this;
    }

    /**
     * Anime Stats.
     *
     * @return UsersTempDataItemAnimeStats
     */
    public function getAnimeStats(): UsersTempDataItemAnimeStats
    {
        return $this->animeStats;
    }

    /**
     * Anime Stats.
     *
     * @param UsersTempDataItemAnimeStats $animeStats
     *
     * @return self
     */
    public function setAnimeStats(UsersTempDataItemAnimeStats $animeStats): self
    {
        $this->animeStats = $animeStats;

        return $this;
    }

    /**
     * Manga Stats.
     *
     * @return UsersTempDataItemMangaStats
     */
    public function getMangaStats(): UsersTempDataItemMangaStats
    {
        return $this->mangaStats;
    }

    /**
     * Manga Stats.
     *
     * @param UsersTempDataItemMangaStats $mangaStats
     *
     * @return self
     */
    public function setMangaStats(UsersTempDataItemMangaStats $mangaStats): self
    {
        $this->mangaStats = $mangaStats;

        return $this;
    }

    /**
     * Favorite entries.
     *
     * @return UsersTempDataItemFavorites
     */
    public function getFavorites(): UsersTempDataItemFavorites
    {
        return $this->favorites;
    }

    /**
     * Favorite entries.
     *
     * @param UsersTempDataItemFavorites $favorites
     *
     * @return self
     */
    public function setFavorites(UsersTempDataItemFavorites $favorites): self
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     *
     * @return string
     */
    public function getAbout(): string
    {
        return $this->about;
    }

    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     *
     * @param string $about
     *
     * @return self
     */
    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }
}
