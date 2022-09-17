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
     *
     * @return ProducerFull
     */
    public function getData(): ProducerFull
    {
        return $this->data;
    }

    /**
     * Producers Resource.
     *
     * @param ProducerFull $data
     *
     * @return self
     */
    public function setData(ProducerFull $data): self
    {
        $this->data = $data;

        return $this;
    }
}
