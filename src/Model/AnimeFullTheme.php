<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeFullTheme
{
    /**
     * @var string[]
     */
    protected $openings = [];

    /**
     * @var string[]
     */
    protected $endings = [];

    /**
     * @return string[]
     */
    public function getOpenings(): array
    {
        return $this->openings;
    }

    /**
     * @param string[] $openings
     */
    public function setOpenings(array $openings): self
    {
        $this->openings = $openings;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEndings(): array
    {
        return $this->endings;
    }

    /**
     * @param string[] $endings
     */
    public function setEndings(array $endings): self
    {
        $this->endings = $endings;

        return $this;
    }
}
