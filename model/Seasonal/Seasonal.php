<?php

namespace JikanPHP\Model\Seasonal;

/**
 * Class Seasonal
 *
 * @package JikanPHP\Model
 */
class Seasonal
{

    /**
     * @var string
     */
    public $seasonName;

    /**
     * @var int
     */
    public $seasonYear;

    /**
     * @var array|SeasonalAnime[]
     */
    public $anime = [];

    /**
     * @return string
     */
    public function getSeason(): string
    {
        return $this->seasonName .' '. $this->seasonYear;
    }

    /**
     * @return int
     */
    public function getSeasonYear(): int
    {
        return $this->seasonYear;
    }

    /**
     * @return string
     */
    public function getSeasonName(): string
    {
        return $this->seasonName;
    }

    /**
     * @return array|SeasonalAnime[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }
}
