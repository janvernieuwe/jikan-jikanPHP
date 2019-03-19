<?php

namespace JikanPHP\Model\Common;

/**
 * Class DateRange
 *
 * @package JikanPHP\Model
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
