<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStaffDataItem
{
    /**
     * Person details.
     *
     * @var AnimeStaffDataItemPerson
     */
    protected $person;

    /**
     * Staff Positions.
     *
     * @var string[]
     */
    protected $positions = [];

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
    public function setPerson(AnimeStaffDataItemPerson $animeStaffDataItemPerson): self
    {
        $this->person = $animeStaffDataItemPerson;

        return $this;
    }

    /**
     * Staff Positions.
     *
     * @return string[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * Staff Positions.
     *
     * @param string[] $positions
     */
    public function setPositions(array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }
}
