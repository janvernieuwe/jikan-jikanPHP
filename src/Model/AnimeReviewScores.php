<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeReviewScores
{
    /**
     * Overall Score.
     *
     * @var int
     */
    protected $overall;
    /**
     * Story Score.
     *
     * @var int
     */
    protected $story;
    /**
     * Animation Score.
     *
     * @var int
     */
    protected $animation;
    /**
     * Sound Score.
     *
     * @var int
     */
    protected $sound;
    /**
     * Character Score.
     *
     * @var int
     */
    protected $character;
    /**
     * Enjoyment Score.
     *
     * @var int
     */
    protected $enjoyment;

    /**
     * Overall Score.
     *
     * @return int
     */
    public function getOverall(): int
    {
        return $this->overall;
    }

    /**
     * Overall Score.
     *
     * @param int $overall
     *
     * @return self
     */
    public function setOverall(int $overall): self
    {
        $this->overall = $overall;

        return $this;
    }

    /**
     * Story Score.
     *
     * @return int
     */
    public function getStory(): int
    {
        return $this->story;
    }

    /**
     * Story Score.
     *
     * @param int $story
     *
     * @return self
     */
    public function setStory(int $story): self
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Animation Score.
     *
     * @return int
     */
    public function getAnimation(): int
    {
        return $this->animation;
    }

    /**
     * Animation Score.
     *
     * @param int $animation
     *
     * @return self
     */
    public function setAnimation(int $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Sound Score.
     *
     * @return int
     */
    public function getSound(): int
    {
        return $this->sound;
    }

    /**
     * Sound Score.
     *
     * @param int $sound
     *
     * @return self
     */
    public function setSound(int $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Character Score.
     *
     * @return int
     */
    public function getCharacter(): int
    {
        return $this->character;
    }

    /**
     * Character Score.
     *
     * @param int $character
     *
     * @return self
     */
    public function setCharacter(int $character): self
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Enjoyment Score.
     *
     * @return int
     */
    public function getEnjoyment(): int
    {
        return $this->enjoyment;
    }

    /**
     * Enjoyment Score.
     *
     * @param int $enjoyment
     *
     * @return self
     */
    public function setEnjoyment(int $enjoyment): self
    {
        $this->enjoyment = $enjoyment;

        return $this;
    }
}
