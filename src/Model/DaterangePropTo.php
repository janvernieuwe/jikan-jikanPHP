<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class DaterangePropTo
{
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
        $this->year = $year;

        return $this;
    }
}
