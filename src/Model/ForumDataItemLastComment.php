<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ForumDataItemLastComment extends \ArrayObject
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
        $this->initialized['url'] = true;
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
        $this->initialized['authorUsername'] = true;
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
        $this->initialized['authorUrl'] = true;
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
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
