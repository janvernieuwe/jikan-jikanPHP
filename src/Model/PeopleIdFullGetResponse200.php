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
     *
     * @return PersonFull
     */
    public function getData(): PersonFull
    {
        return $this->data;
    }

    /**
     * Person Resource.
     *
     * @param PersonFull $data
     *
     * @return self
     */
    public function setData(PersonFull $data): self
    {
        $this->data = $data;

        return $this;
    }
}
