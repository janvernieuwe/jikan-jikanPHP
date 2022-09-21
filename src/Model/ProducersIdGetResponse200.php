<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ProducersIdGetResponse200
{
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
    public function setData(Producer $producer): self
    {
        $this->data = $producer;

        return $this;
    }
}
