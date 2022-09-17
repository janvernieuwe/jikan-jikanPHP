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
     *
     * @return Producer
     */
    public function getData(): Producer
    {
        return $this->data;
    }

    /**
     * Producers Resource.
     *
     * @param Producer $data
     *
     * @return self
     */
    public function setData(Producer $data): self
    {
        $this->data = $data;

        return $this;
    }
}
