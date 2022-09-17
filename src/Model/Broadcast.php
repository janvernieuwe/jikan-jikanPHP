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
     *
     * @return string|null
     */
    public function getDay(): ?string
    {
        return $this->day;
    }

    /**
     * Day of the week.
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Time in 24 hour format.
     *
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * Time in 24 hour format.
     *
     * @param string|null $time
     *
     * @return self
     */
    public function setTime(?string $time): self
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Timezone (Tz Database format https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).
     *
     * @return string|null
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * Timezone (Tz Database format https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).
     *
     * @param string|null $timezone
     *
     * @return self
     */
    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Raw parsed broadcast string.
     *
     * @return string|null
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * Raw parsed broadcast string.
     *
     * @param string|null $string
     *
     * @return self
     */
    public function setString(?string $string): self
    {
        $this->string = $string;

        return $this;
    }
}
