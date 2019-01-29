<?php

namespace Jikan\Model\Manga;

use Jikan\Model\Common\Reviewer;

/**
 * Class MangaReviewer
 *
 * @package Jikan\Model
 */
class MangaReviewer extends Reviewer
{

    /**
     * @var int
     */
    private $chaptersRead;

    /**
     * @var MangaReviewScores
     */
    private $scores;

    /**
     * @return int
     */
    public function getChaptersRead(): int
    {
        return $this->chaptersRead;
    }

    /**
     * @return MangaReviewScores
     */
    public function getScores(): MangaReviewScores
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
