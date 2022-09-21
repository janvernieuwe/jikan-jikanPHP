<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class SeasonsDataItem
{
    /**
     * Year.
     *
     * @var int
     */
    protected $year;

    /**
     * List of available seasons.
     *
     * @var string[]
     */
    protected $seasons = [];

    /**
     * Year.
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Year.
     */
    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * List of available seasons.
     *
     * @return string[]
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }

    /**
     * List of available seasons.
     *
     * @param string[] $seasons
     */
    public function setSeasons(array $seasons): self
    {
        $this->seasons = $seasons;

        return $this;
    }
}
