<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PeopleIdFullGetResponse200
{
    /**
     * Person Resource.
     *
     * @var PersonFull
     */
    protected $data;

    /**
     * Person Resource.
     */
    public function getData(): PersonFull
    {
        return $this->data;
    }

    /**
     * Person Resource.
     */
    public function setData(PersonFull $personFull): self
    {
        $this->data = $personFull;

        return $this;
    }
}
