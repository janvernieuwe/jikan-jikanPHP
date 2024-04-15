<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeThemesData extends \ArrayObject
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
     * @var list<string>
     */
    protected $openings;

    /**
     * @var list<string>
     */
    protected $endings;

    /**
     * @return list<string>
     */
    public function getOpenings(): array
    {
        return $this->openings;
    }

    /**
     * @param list<string> $openings
     */
    public function setOpenings(array $openings): self
    {
        $this->initialized['openings'] = true;
        $this->openings = $openings;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getEndings(): array
    {
        return $this->endings;
    }

    /**
     * @param list<string> $endings
     */
    public function setEndings(array $endings): self
    {
        $this->initialized['endings'] = true;
        $this->endings = $endings;

        return $this;
    }
}
