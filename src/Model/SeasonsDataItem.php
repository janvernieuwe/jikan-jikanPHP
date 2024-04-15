<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class SeasonsDataItem extends \ArrayObject
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
     * Year.
     *
     * @var int
     */
    protected $year;

    /**
     * List of available seasons.
     *
     * @var list<string>
     */
    protected $seasons;

    /**
     * Year.
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Year.
     */
    public function setYear(int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;

        return $this;
    }

    /**
     * List of available seasons.
     *
     * @return list<string>
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }

    /**
     * List of available seasons.
     *
     * @param list<string> $seasons
     */
    public function setSeasons(array $seasons): self
    {
        $this->initialized['seasons'] = true;
        $this->seasons = $seasons;

        return $this;
    }
}
