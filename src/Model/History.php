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
     *
     * @return MalUrl
     */
    public function getEntry(): MalUrl
    {
        return $this->entry;
    }

    /**
     * Parsed URL Data.
     *
     * @param MalUrl $entry
     *
     * @return self
     */
    public function setEntry(MalUrl $entry): self
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Number of episodes/chapters watched/read.
     *
     * @return int
     */
    public function getIncrement(): int
    {
        return $this->increment;
    }

    /**
     * Number of episodes/chapters watched/read.
     *
     * @param int $increment
     *
     * @return self
     */
    public function setIncrement(int $increment): self
    {
        $this->increment = $increment;

        return $this;
    }

    /**
     * Date ISO8601.
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Date ISO8601.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
