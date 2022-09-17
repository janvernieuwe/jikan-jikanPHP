<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ForumDataItem
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
     * Comment count.
     *
     * @var int
     */
    protected $comments;
    /**
     * Last comment details.
     *
     * @var ForumDataItemLastComment
     */
    protected $lastComment;

    /**
     * MyAnimeList ID.
     *
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     *
     * @param int $malId
     *
     * @return self
     */
    public function setMalId(int $malId): self
    {
        $this->malId = $malId;

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
     * Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Post Date ISO8601.
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Post Date ISO8601.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Author MyAnimeList Username.
     *
     * @return string
     */
    public function getAuthorUsername(): string
    {
        return $this->authorUsername;
    }

    /**
     * Author MyAnimeList Username.
     *
     * @param string $authorUsername
     *
     * @return self
     */
    public function setAuthorUsername(string $authorUsername): self
    {
        $this->authorUsername = $authorUsername;

        return $this;
    }

    /**
     * Author Profile URL.
     *
     * @return string
     */
    public function getAuthorUrl(): string
    {
        return $this->authorUrl;
    }

    /**
     * Author Profile URL.
     *
     * @param string $authorUrl
     *
     * @return self
     */
    public function setAuthorUrl(string $authorUrl): self
    {
        $this->authorUrl = $authorUrl;

        return $this;
    }

    /**
     * Comment count.
     *
     * @return int
     */
    public function getComments(): int
    {
        return $this->comments;
    }

    /**
     * Comment count.
     *
     * @param int $comments
     *
     * @return self
     */
    public function setComments(int $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Last comment details.
     *
     * @return ForumDataItemLastComment
     */
    public function getLastComment(): ForumDataItemLastComment
    {
        return $this->lastComment;
    }

    /**
     * Last comment details.
     *
     * @param ForumDataItemLastComment $lastComment
     *
     * @return self
     */
    public function setLastComment(ForumDataItemLastComment $lastComment): self
    {
        $this->lastComment = $lastComment;

        return $this;
    }
}
