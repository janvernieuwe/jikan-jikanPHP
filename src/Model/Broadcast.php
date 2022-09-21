<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Broadcast
{
    /**
     * Day of the week.
     *
     * @var string|null
     */
    protected $day;

    /**
     * Time in 24 hour format.
     *
     * @var string|null
     */
    protected $time;

    /**
     * Timezone (Tz Database format https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).
     *
     * @var string|null
     */
    protected $timezone;

    /**
     * Raw parsed broadcast string.
     *
     * @var string|null
     */
    protected $string;

    /**
     * Day of the week.
     */
    public function getDay(): ?string
    {
        return $this->day;
    }

    /**
     * Day of the week.
     */
    public function setDay(?string $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Time in 24 hour format.
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * Time in 24 hour format.
     */
    public function setTime(?string $time): self
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Timezone (Tz Database format https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * Timezone (Tz Database format https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).
     */
    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Raw parsed broadcast string.
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * Raw parsed broadcast string.
     */
    public function setString(?string $string): self
    {
        $this->string = $string;

        return $this;
    }
}
