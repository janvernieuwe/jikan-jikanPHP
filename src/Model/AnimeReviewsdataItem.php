<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeReviewsdataItem
{
    /**
     * @var UserMeta
     */
    protected $user;
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
     * Review content.
     *
     * @var string
     */
    protected $review;
    /**
     * Number of episodes watched.
     *
     * @var int
     */
    protected $episodesWatched;
    /**
     * Review Scores breakdown.
     *
     * @var AnimeReviewScores
     */
    protected $scores;

    /**
     * @return UserMeta
     */
    public function getUser(): UserMeta
    {
        return $this->user;
    }

    /**
     * @param UserMeta $user
     *
     * @return self
     */
    public function setUser(UserMeta $user): self
    {
        $this->user = $user;

        return $this;
    }

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
     * Number of episodes watched.
     *
     * @return int
     */
    public function getEpisodesWatched(): int
    {
        return $this->episodesWatched;
    }

    /**
     * Number of episodes watched.
     *
     * @param int $episodesWatched
     *
     * @return self
     */
    public function setEpisodesWatched(int $episodesWatched): self
    {
        $this->episodesWatched = $episodesWatched;

        return $this;
    }

    /**
     * Review Scores breakdown.
     *
     * @return AnimeReviewScores
     */
    public function getScores(): AnimeReviewScores
    {
        return $this->scores;
    }

    /**
     * Review Scores breakdown.
     *
     * @param AnimeReviewScores $scores
     *
     * @return self
     */
    public function setScores(AnimeReviewScores $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}
