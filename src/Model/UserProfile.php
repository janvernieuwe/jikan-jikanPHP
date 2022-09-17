<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserProfile
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
     * MyAnimeList ID.
     *
     * @return int|null
     */
    public function getMalId(): ?int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     *
     * @param int|null $malId
     *
     * @return self
     */
    public function setMalId(?int $malId): self
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
     * @return UserImages
     */
    public function getImages(): UserImages
    {
        return $this->images;
    }

    /**
     * @param UserImages $images
     *
     * @return self
     */
    public function setImages(UserImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Last Online Date ISO8601.
     *
     * @return string|null
     */
    public function getLastOnline(): ?string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601.
     *
     * @param string|null $lastOnline
     *
     * @return self
     */
    public function setLastOnline(?string $lastOnline): self
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * User Gender.
     *
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * User Gender.
     *
     * @param string|null $gender
     *
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Birthday Date ISO8601.
     *
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * Birthday Date ISO8601.
     *
     * @param string|null $birthday
     *
     * @return self
     */
    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Location.
     *
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Location.
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Joined Date ISO8601.
     *
     * @return string|null
     */
    public function getJoined(): ?string
    {
        return $this->joined;
    }

    /**
     * Joined Date ISO8601.
     *
     * @param string|null $joined
     *
     * @return self
     */
    public function setJoined(?string $joined): self
    {
        $this->joined = $joined;

        return $this;
    }
}
