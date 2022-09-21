<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class History
{
    /**
     * Parsed URL Data.
     *
     * @var MalUrl
     */
    protected $entry;

    /**
     * Number of episodes/chapters watched/read.
     *
     * @var int
     */
    protected $increment;

    /**
     * Date ISO8601.
     *
     * @var string
     */
    protected $date;

    /**
     * Parsed URL Data.
     */
    public function getEntry(): MalUrl
    {
        return $this->entry;
    }

    /**
     * Parsed URL Data.
     */
    public function setEntry(MalUrl $malUrl): self
    {
        $this->entry = $malUrl;

        return $this;
    }

    /**
     * Number of episodes/chapters watched/read.
     */
    public function getIncrement(): int
    {
        return $this->increment;
    }

    /**
     * Number of episodes/chapters watched/read.
     */
    public function setIncrement(int $increment): self
    {
        $this->increment = $increment;

        return $this;
    }

    /**
     * Date ISO8601.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Date ISO8601.
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
