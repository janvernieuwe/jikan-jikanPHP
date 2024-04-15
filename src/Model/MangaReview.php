<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class MangaReview extends ArrayObject
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
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * MyAnimeList review URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Entry type.
     *
     * @var string
     */
    protected $type;

    /**
     * User reaction count on the review.
     *
     * @var MangaReviewReactions
     */
    protected $reactions;

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
     * Number of user votes on the Review.
     *
     * @var int
     */
    protected $score;

    /**
     * Review tags.
     *
     * @var list<string>
     */
    protected $tags;

    /**
     * The review contains spoiler.
     *
     * @var bool
     */
    protected $isSpoiler;

    /**
     * The review was made before the entry was completed.
     *
     * @var bool
     */
    protected $isPreliminary;

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
        $this->initialized['malId'] = true;
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList review URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList review URL.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Entry type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Entry type.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * User reaction count on the review.
     */
    public function getReactions(): MangaReviewReactions
    {
        return $this->reactions;
    }

    /**
     * User reaction count on the review.
     */
    public function setReactions(MangaReviewReactions $reactions): self
    {
        $this->initialized['reactions'] = true;
        $this->reactions = $reactions;

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
        $this->initialized['date'] = true;
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
        $this->initialized['review'] = true;
        $this->review = $review;

        return $this;
    }

    /**
     * Number of user votes on the Review.
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Number of user votes on the Review.
     */
    public function setScore(int $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * Review tags.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Review tags.
     *
     * @param list<string> $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * The review contains spoiler.
     */
    public function getIsSpoiler(): bool
    {
        return $this->isSpoiler;
    }

    /**
     * The review contains spoiler.
     */
    public function setIsSpoiler(bool $isSpoiler): self
    {
        $this->initialized['isSpoiler'] = true;
        $this->isSpoiler = $isSpoiler;

        return $this;
    }

    /**
     * The review was made before the entry was completed.
     */
    public function getIsPreliminary(): bool
    {
        return $this->isPreliminary;
    }

    /**
     * The review was made before the entry was completed.
     */
    public function setIsPreliminary(bool $isPreliminary): self
    {
        $this->initialized['isPreliminary'] = true;
        $this->isPreliminary = $isPreliminary;

        return $this;
    }
}
