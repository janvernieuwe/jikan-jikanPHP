<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class UsersTempDataItem extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     */
    public function setMalId(int $malId): self
    {
        $this->initialized['malId'] = true;
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList Username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * MyAnimeList Username.
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }

    /**
     * MyAnimeList URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Images.
     */
    public function getImages(): UsersTempDataItemImages
    {
        return $this->images;
    }

    /**
     * Images.
     */
    public function setImages(UsersTempDataItemImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Last Online Date ISO8601.
     */
    public function getLastOnline(): string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601.
     */
    public function setLastOnline(string $lastOnline): self
    {
        $this->initialized['lastOnline'] = true;
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * User Gender.
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * User Gender.
     */
    public function setGender(string $gender): self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;

        return $this;
    }

    /**
     * Birthday Date ISO8601.
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * Birthday Date ISO8601.
     */
    public function setBirthday(string $birthday): self
    {
        $this->initialized['birthday'] = true;
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Location.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Location.
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * Joined Date ISO8601.
     */
    public function getJoined(): string
    {
        return $this->joined;
    }

    /**
     * Joined Date ISO8601.
     */
    public function setJoined(string $joined): self
    {
        $this->initialized['joined'] = true;
        $this->joined = $joined;

        return $this;
    }

    /**
     * Anime Stats.
     */
    public function getAnimeStats(): UsersTempDataItemAnimeStats
    {
        return $this->animeStats;
    }

    /**
     * Anime Stats.
     */
    public function setAnimeStats(UsersTempDataItemAnimeStats $animeStats): self
    {
        $this->initialized['animeStats'] = true;
        $this->animeStats = $animeStats;

        return $this;
    }

    /**
     * Manga Stats.
     */
    public function getMangaStats(): UsersTempDataItemMangaStats
    {
        return $this->mangaStats;
    }

    /**
     * Manga Stats.
     */
    public function setMangaStats(UsersTempDataItemMangaStats $mangaStats): self
    {
        $this->initialized['mangaStats'] = true;
        $this->mangaStats = $mangaStats;

        return $this;
    }

    /**
     * Favorite entries.
     */
    public function getFavorites(): UsersTempDataItemFavorites
    {
        return $this->favorites;
    }

    /**
     * Favorite entries.
     */
    public function setFavorites(UsersTempDataItemFavorites $favorites): self
    {
        $this->initialized['favorites'] = true;
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     */
    public function getAbout(): string
    {
        return $this->about;
    }

    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     */
    public function setAbout(string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }
}
