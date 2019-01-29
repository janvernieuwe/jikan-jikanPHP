<?php

namespace Jikan\Model\Schedule;

use Jikan\Model\Common\AnimeCard;

/**
 * Class Schedule
 *
 * @package Jikan\Model
 */
class Schedule
{

    /**
     * @var AnimeCard[]
     */
    public $monday = [];

    /**
     * @var AnimeCard[]
     */
    public $tuesday = [];

    /**
     * @var AnimeCard[]
     */
    public $wednesday = [];

    /**
     * @var AnimeCard[]
     */
    public $thursday = [];

    /**
     * @var AnimeCard[]
     */
    public $friday = [];

    /**
     * @var AnimeCard[]
     */
    public $saturday = [];

    /**
     * @var AnimeCard[]
     */
    public $sunday = [];

    /**
     * @var AnimeCard[]
     */
    public $other = [];

    /**
     * @var AnimeCard[]
     */
    public $unknown = [];


    /**
     * @return AnimeCard[]
     */
    public function getMonday(): array
    {
        return $this->monday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getTuesday(): array
    {
        return $this->tuesday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getWednesday(): array
    {
        return $this->wednesday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getThursday(): array
    {
        return $this->thursday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getFriday(): array
    {
        return $this->friday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getSaturday(): array
    {
        return $this->saturday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getSunday(): array
    {
        return $this->sunday;
    }

    /**
     * @return AnimeCard[]
     */
    public function getOther(): array
    {
        return $this->other;
    }

    /**
     * @return AnimeCard[]
     */
    public function getUnknown(): array
    {
        return $this->unknown;
    }
}
