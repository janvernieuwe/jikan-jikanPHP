<?php

namespace Jikan\Model\SeasonList;

/**
 * Class SeasonListItem
 *
 * @package Jikan\Model\SeasonListItem
 */
class SeasonListItem
{
    /**
     * @var int
     */
    public $year;

    /**
     * @var string[]
     */
    public $seasons;

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return string[]
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }
}
