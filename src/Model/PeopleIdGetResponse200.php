<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PeopleIdGetResponse200
{
    /**
     * Person Resource.
     *
     * @var Person
     */
    protected $data;

    /**
     * Person Resource.
     *
     * @return Person
     */
    public function getData(): Person
    {
        return $this->data;
    }

    /**
     * Person Resource.
     *
     * @param Person $data
     *
     * @return self
     */
    public function setData(Person $data): self
    {
        $this->data = $data;

        return $this;
    }
}
