<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserMeta extends \ArrayObject
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
     * MyAnimeList Profile URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList Profile URL.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getImages(): UserImages
    {
        return $this->images;
    }

    public function setImages(UserImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}
