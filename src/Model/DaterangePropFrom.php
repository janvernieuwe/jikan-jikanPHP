<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class DaterangePropFrom
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
     *
     * @return int|null
     */
    public function getDay(): ?int
    {
        return $this->day;
    }

    /**
     * Day.
     *
     * @param int|null $day
     *
     * @return self
     */
    public function setDay(?int $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Month.
     *
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }

    /**
     * Month.
     *
     * @param int|null $month
     *
     * @return self
     */
    public function setMonth(?int $month): self
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Year.
     *
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * Year.
     *
     * @param int|null $year
     *
     * @return self
     */
    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }
}
