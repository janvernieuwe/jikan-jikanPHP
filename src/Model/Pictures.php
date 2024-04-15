<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Pictures extends \ArrayObject
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
     * @var list<PicturesDataItem>
     */
    protected $data;

    /**
     * @return list<PicturesDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<PicturesDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
