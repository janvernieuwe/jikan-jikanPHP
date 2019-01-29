<?php

namespace Jikan\Model\Common;

/**
 * Class DateRange
 *
 * @package Jikan\Model
 */
class DateRange
{
    /**
     * @var string
     */
    private $date;

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
}
