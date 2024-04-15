<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ProducersIdFullGetResponse200 extends \ArrayObject
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
     * @var ProducerFull
     */
    protected $data;

    /**
     * Producers Resource.
     */
    public function getData(): ProducerFull
    {
        return $this->data;
    }

    /**
     * Producers Resource.
     */
    public function setData(ProducerFull $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
