<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStaffDataItem extends \ArrayObject
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
     * Person details.
     *
     * @var AnimeStaffDataItemPerson
     */
    protected $person;

    /**
     * Staff Positions.
     *
     * @var list<string>
     */
    protected $positions;

    /**
     * Person details.
     */
    public function getPerson(): AnimeStaffDataItemPerson
    {
        return $this->person;
    }

    /**
     * Person details.
     */
    public function setPerson(AnimeStaffDataItemPerson $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }

    /**
     * Staff Positions.
     *
     * @return list<string>
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * Staff Positions.
     *
     * @param list<string> $positions
     */
    public function setPositions(array $positions): self
    {
        $this->initialized['positions'] = true;
        $this->positions = $positions;

        return $this;
    }
}
