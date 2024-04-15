<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class RandomPeopleGetResponse200 extends \ArrayObject
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
    public function setData(Person $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
