<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Pictures
{
    /**
     * @var PicturesDataItem[]
     */
    protected $data = [];

    /**
     * @return PicturesDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param PicturesDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
