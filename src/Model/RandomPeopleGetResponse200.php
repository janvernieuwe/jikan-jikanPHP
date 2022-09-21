<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class RandomPeopleGetResponse200
{
    /**
     * Person Resource.
     *
     * @var Person
     */
    protected $data;

    /**
     * Person Resource.
     */
    public function getData(): Person
    {
        return $this->data;
    }

    /**
     * Person Resource.
     */
    public function setData(Person $person): self
    {
        $this->data = $person;

        return $this;
    }
}
