<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersSearchdataItem
{
    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

    /**
     * MyAnimeList Username.
     *
     * @var string
     */
    protected $username;

    /**
     * @var UserImages
     */
    protected $images;

    /**
     * Last Online Date ISO8601.
     *
     * @var string
     */
    protected $lastOnline;

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
    public function getLastOnline(): string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601.
     */
    public function setLastOnline(string $lastOnline): self
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }
}
