<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ForumDataItemLastComment
{
    /**
     * Last comment URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Author MyAnimeList Username.
     *
     * @var string
     */
    protected $authorUsername;

    /**
     * Author Profile URL.
     *
     * @var string
     */
    protected $authorUrl;

    /**
     * Last comment date posted ISO8601.
     *
     * @var string|null
     */
    protected $date;

    /**
     * Last comment URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Last comment URL.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Author MyAnimeList Username.
     */
    public function getAuthorUsername(): string
    {
        return $this->authorUsername;
    }

    /**
     * Author MyAnimeList Username.
     */
    public function setAuthorUsername(string $authorUsername): self
    {
        $this->authorUsername = $authorUsername;

        return $this;
    }

    /**
     * Author Profile URL.
     */
    public function getAuthorUrl(): string
    {
        return $this->authorUrl;
    }

    /**
     * Author Profile URL.
     */
    public function setAuthorUrl(string $authorUrl): self
    {
        $this->authorUrl = $authorUrl;

        return $this;
    }

    /**
     * Last comment date posted ISO8601.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Last comment date posted ISO8601.
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
