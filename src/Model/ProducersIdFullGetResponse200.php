<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ProducersIdFullGetResponse200
{
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
    public function setData(ProducerFull $producerFull): self
    {
        $this->data = $producerFull;

        return $this;
    }
}
