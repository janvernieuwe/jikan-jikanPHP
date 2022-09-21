<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserById
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
}
