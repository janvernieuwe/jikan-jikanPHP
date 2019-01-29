<?php

namespace Jikan\Model\Manga;

/**
 * Class MangaReviewScores
 *
 * @package Jikan\Model
 */
class MangaReviewScores
{

    /**
     * @var int
     */
    private $overall;

    /**
     * @var int
     */
    private $story;

    /**
     * @var int
     */
    private $art;

    /**
     * @var int
     */
    private $character;

    /**
     * @var int
     */
    private $enjoyment;

    /**
     * @return int
     */
    public function getOverall(): int
    {
        return $this->overall;
    }

    /**
     * @return int
     */
    public function getStory(): int
    {
        return $this->story;
    }

    /**
     * @return int
     */
    public function getArt(): int
    {
        return $this->art;
    }

    /**
     * @return int
     */
    public function getCharacter(): int
    {
        return $this->character;
    }

    /**
     * @return int
     */
    public function getEnjoyment(): int
    {
        return $this->enjoyment;
    }
}
