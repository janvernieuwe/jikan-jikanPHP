<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaReviewScores
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
     * Art Score.
     *
     * @var int
     */
    protected $art;
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
     * Art Score.
     *
     * @return int
     */
    public function getArt(): int
    {
        return $this->art;
    }

    /**
     * Art Score.
     *
     * @param int $art
     *
     * @return self
     */
    public function setArt(int $art): self
    {
        $this->art = $art;

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
