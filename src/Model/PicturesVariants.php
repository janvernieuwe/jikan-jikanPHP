<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PicturesVariants
{
    /**
     * @var PicturesVariantsDataItem[]
     */
    protected $data = [];

    /**
     * @return PicturesVariantsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param PicturesVariantsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
