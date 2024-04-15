<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class DaterangePropFrom extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Day.
     *
     * @var int|null
     */
    protected $day;

    /**
     * Month.
     *
     * @var int|null
     */
    protected $month;

    /**
     * Year.
     *
     * @var int|null
     */
    protected $year;

    /**
     * Day.
     */
    public function getDay(): ?int
    {
        return $this->day;
    }

    /**
     * Day.
     */
    public function setDay(?int $day): self
    {
        $this->initialized['day'] = true;
        $this->day = $day;

        return $this;
    }

    /**
     * Month.
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }

    /**
     * Month.
     */
    public function setMonth(?int $month): self
    {
        $this->initialized['month'] = true;
        $this->month = $month;

        return $this;
    }

    /**
     * Year.
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * Year.
     */
    public function setYear(?int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;

        return $this;
    }
}
