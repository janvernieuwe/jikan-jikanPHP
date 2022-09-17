<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaReview
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
     * Entry Type.
     *
     * @var string
     */
    protected $type;
    /**
     * Number of user votes on the Review.
     *
     * @var int
     */
    protected $votes;
    /**
     * Review created date ISO8601.
     *
     * @var string
     */
    protected $date;
    /**
     * Number of chapters read by the reviewer.
     *
     * @var int
     */
    protected $chaptersRead;
    /**
     * Review content.
     *
     * @var string
     */
    protected $review;
    /**
     * Review Scores breakdown.
     *
     * @var MangaReviewScores
     */
    protected $scores;

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
     * Entry Type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Entry Type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Number of user votes on the Review.
     *
     * @return int
     */
    public function getVotes(): int
    {
        return $this->votes;
    }

    /**
     * Number of user votes on the Review.
     *
     * @param int $votes
     *
     * @return self
     */
    public function setVotes(int $votes): self
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Review created date ISO8601.
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Review created date ISO8601.
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
     * Number of chapters read by the reviewer.
     *
     * @return int
     */
    public function getChaptersRead(): int
    {
        return $this->chaptersRead;
    }

    /**
     * Number of chapters read by the reviewer.
     *
     * @param int $chaptersRead
     *
     * @return self
     */
    public function setChaptersRead(int $chaptersRead): self
    {
        $this->chaptersRead = $chaptersRead;

        return $this;
    }

    /**
     * Review content.
     *
     * @return string
     */
    public function getReview(): string
    {
        return $this->review;
    }

    /**
     * Review content.
     *
     * @param string $review
     *
     * @return self
     */
    public function setReview(string $review): self
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Review Scores breakdown.
     *
     * @return MangaReviewScores
     */
    public function getScores(): MangaReviewScores
    {
        return $this->scores;
    }

    /**
     * Review Scores breakdown.
     *
     * @param MangaReviewScores $scores
     *
     * @return self
     */
    public function setScores(MangaReviewScores $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}