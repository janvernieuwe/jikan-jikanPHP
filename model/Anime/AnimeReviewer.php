<?php

namespace JikanPHP\Model\Anime;

use JikanPHP\Model\Common\Reviewer;

/**
 * Class AnimeReviewScores
 *
 * @package JikanPHP\Model
 */
class AnimeReviewer extends Reviewer
{

    /**
     * @var int
     */
    private $episodesSeen;

    /**
     * @var AnimeReviewScores
     */
    private $scores;

    /**
     * @return int
     */
    public function getEpisodesSeen(): int
    {
        return $this->episodesSeen;
    }

    /**
     * @return AnimeReviewScores
     */
    public function getScores(): AnimeReviewScores
    {
        return $this->scores;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}
