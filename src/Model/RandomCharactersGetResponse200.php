<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class RandomCharactersGetResponse200 extends ArrayObject
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
     * Character Resource.
     *
     * @var Character
     */
    protected $data;

    /**
     * Character Resource.
     */
    public function getData(): Character
    {
        return $this->data;
    }

    /**
     * Character Resource.
     */
    public function setData(Character $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
