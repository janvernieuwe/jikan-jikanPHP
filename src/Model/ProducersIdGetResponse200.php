<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class ProducersIdGetResponse200 extends ArrayObject
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
     * Producers Resource.
     *
     * @var Producer
     */
    protected $data;

    /**
     * Producers Resource.
     */
    public function getData(): Producer
    {
        return $this->data;
    }

    /**
     * Producers Resource.
     */
    public function setData(Producer $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
