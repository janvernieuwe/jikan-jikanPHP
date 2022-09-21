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
     */
    public function getOverall(): int
    {
        return $this->overall;
    }

    /**
     * Overall Score.
     */
    public function setOverall(int $overall): self
    {
        $this->overall = $overall;

        return $this;
    }

    /**
     * Story Score.
     */
    public function getStory(): int
    {
        return $this->story;
    }

    /**
     * Story Score.
     */
    public function setStory(int $story): self
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Art Score.
     */
    public function getArt(): int
    {
        return $this->art;
    }

    /**
     * Art Score.
     */
    public function setArt(int $art): self
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Character Score.
     */
    public function getCharacter(): int
    {
        return $this->character;
    }

    /**
     * Character Score.
     */
    public function setCharacter(int $character): self
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Enjoyment Score.
     */
    public function getEnjoyment(): int
    {
        return $this->enjoyment;
    }

    /**
     * Enjoyment Score.
     */
    public function setEnjoyment(int $enjoyment): self
    {
        $this->enjoyment = $enjoyment;

        return $this;
    }
}
