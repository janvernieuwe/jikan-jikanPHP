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
    private $string;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @var DateProp[]
     */
    private $prop;

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->string;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getUntil(): string
    {
        return $this->to;
    }

    /**
     * @return DateProp
     */
    public function getFromProp(): DateProp
    {
        return reset($this->prop);
    }

    /**
     * @return DateProp
     */
    public function getUntilProp(): DateProp
    {
        return end($this->prop);
    }
}