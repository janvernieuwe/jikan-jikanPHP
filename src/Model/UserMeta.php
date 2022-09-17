<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserMeta
{
    /**
     * MyAnimeList Username.
     *
     * @var string
     */
    protected $username;
    /**
     * MyAnimeList Profile URL.
     *
     * @var string
     */
    protected $url;
    /**
     * @var UserImages
     */
    protected $images;

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
     * MyAnimeList Profile URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList Profile URL.
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
}
