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

    public function getUser(): UserMeta
    {
        return $this->user;
    }

    public function setUser(UserMeta $userMeta): self
    {
        $this->user = $userMeta;

        return $this;
    }

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
     * Entry Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Entry Type.
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Number of user votes on the Review.
     */
    public function getVotes(): int
    {
        return $this->votes;
    }

    /**
     * Number of user votes on the Review.
     */
    public function setVotes(int $votes): self
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Review created date ISO8601.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Review created date ISO8601.
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Review content.
     */
    public function getReview(): string
    {
        return $this->review;
    }

    /**
     * Review content.
     */
    public function setReview(string $review): self
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Number of episodes watched.
     */
    public function getEpisodesWatched(): int
    {
        return $this->episodesWatched;
    }

    /**
     * Number of episodes watched.
     */
    public function setEpisodesWatched(int $episodesWatched): self
    {
        $this->episodesWatched = $episodesWatched;

        return $this;
    }

    /**
     * Review Scores breakdown.
     */
    public function getScores(): AnimeReviewScores
    {
        return $this->scores;
    }

    /**
     * Review Scores breakdown.
     */
    public function setScores(AnimeReviewScores $animeReviewScores): self
    {
        $this->scores = $animeReviewScores;

        return $this;
    }
}
