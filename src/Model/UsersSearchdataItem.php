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
}
