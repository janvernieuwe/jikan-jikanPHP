<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Moreinfo extends \ArrayObject
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
     * @var MoreinfoData
     */
    protected $data;

    public function getData(): MoreinfoData
    {
        return $this->data;
    }

    public function setData(MoreinfoData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
