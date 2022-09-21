<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class NewsDataItem
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Post Date ISO8601.
     *
     * @var string
     */
    protected $date;

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
     * Forum topic URL.
     *
     * @var string
     */
    protected $forumUrl;

    /**
     * @var CommonImages
     */
    protected $images;

    /**
     * Comment count.
     *
     * @var int
     */
    protected $comments;

    /**
     * Excerpt.
     *
     * @var string
     */
    protected $excerpt;

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
        $this->malId = $malId;

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

    /**
     * Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Post Date ISO8601.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Post Date ISO8601.
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

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
     * Forum topic URL.
     */
    public function getForumUrl(): string
    {
        return $this->forumUrl;
    }

    /**
     * Forum topic URL.
     */
    public function setForumUrl(string $forumUrl): self
    {
        $this->forumUrl = $forumUrl;

        return $this;
    }

    public function getImages(): CommonImages
    {
        return $this->images;
    }

    public function setImages(CommonImages $commonImages): self
    {
        $this->images = $commonImages;

        return $this;
    }

    /**
     * Comment count.
     */
    public function getComments(): int
    {
        return $this->comments;
    }

    /**
     * Comment count.
     */
    public function setComments(int $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Excerpt.
     */
    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    /**
     * Excerpt.
     */
    public function setExcerpt(string $excerpt): self
    {
        $this->excerpt = $excerpt;

        return $this;
    }
}
