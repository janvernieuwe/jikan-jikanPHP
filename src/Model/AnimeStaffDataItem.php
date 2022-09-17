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
    protected $positions;

    /**
     * Person details.
     *
     * @return AnimeStaffDataItemPerson
     */
    public function getPerson(): AnimeStaffDataItemPerson
    {
        return $this->person;
    }

    /**
     * Person details.
     *
     * @param AnimeStaffDataItemPerson $person
     *
     * @return self
     */
    public function setPerson(AnimeStaffDataItemPerson $person): self
    {
        $this->person = $person;

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
     *
     * @return self
     */
    public function setPositions(array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }
}
