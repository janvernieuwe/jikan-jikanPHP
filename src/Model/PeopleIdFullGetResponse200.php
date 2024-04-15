<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class PeopleIdFullGetResponse200 extends ArrayObject
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
    public function setData(PersonFull $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
