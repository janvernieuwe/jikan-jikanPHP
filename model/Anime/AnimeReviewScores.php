<?php

namespace JikanPHP\Model\Anime;

/**
 * Class AnimeReviewScores
 *
 * @package JikanPHP\Model
 */
class AnimeReviewScores
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
    private $animation;

    /**
     * @var int
     */
    private $sound;

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
    public function getAnimation(): int
    {
        return $this->animation;
    }

    /**
     * @return int
     */
    public function getSound(): int
    {
        return $this->sound;
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
