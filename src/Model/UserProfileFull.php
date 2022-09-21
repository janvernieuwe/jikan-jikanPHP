<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserProfileFull
{
    /**
     * MyAnimeList ID.
     *
     * @var int|null
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
     * @var UserImages
     */
    protected $images;

    /**
     * Last Online Date ISO8601.
     *
     * @var string|null
     */
    protected $lastOnline;

    /**
     * User Gender.
     *
     * @var string|null
     */
    protected $gender;

    /**
     * Birthday Date ISO8601.
     *
     * @var string|null
     */
    protected $birthday;

    /**
     * Location.
     *
     * @var string|null
     */
    protected $location;

    /**
     * Joined Date ISO8601.
     *
     * @var string|null
     */
    protected $joined;

    /**
     * @var UserProfileFullStatistics
     */
    protected $statistics;

    /**
     * @var UserProfileFullExternalItem[]
     */
    protected $external = [];

    /**
     * MyAnimeList ID.
     */
    public function getMalId(): ?int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     */
    public function setMalId(?int $malId): self
    {
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
        $this->url = $url;

        return $this;
    }

    public function getImages(): UserImages
    {
        return $this->images;
    }

    public function setImages(UserImages $userImages): self
    {
        $this->images = $userImages;

        return $this;
    }

    /**
     * Last Online Date ISO8601.
     */
    public function getLastOnline(): ?string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601.
     */
    public function setLastOnline(?string $lastOnline): self
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * User Gender.
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * User Gender.
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Birthday Date ISO8601.
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * Birthday Date ISO8601.
     */
    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Location.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Location.
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Joined Date ISO8601.
     */
    public function getJoined(): ?string
    {
        return $this->joined;
    }

    /**
     * Joined Date ISO8601.
     */
    public function setJoined(?string $joined): self
    {
        $this->joined = $joined;

        return $this;
    }

    public function getStatistics(): UserProfileFullStatistics
    {
        return $this->statistics;
    }

    public function setStatistics(UserProfileFullStatistics $userProfileFullStatistics): self
    {
        $this->statistics = $userProfileFullStatistics;

        return $this;
    }

    /**
     * @return UserProfileFullExternalItem[]
     */
    public function getExternal(): array
    {
        return $this->external;
    }

    /**
     * @param UserProfileFullExternalItem[] $external
     */
    public function setExternal(array $external): self
    {
        $this->external = $external;

        return $this;
    }
}
