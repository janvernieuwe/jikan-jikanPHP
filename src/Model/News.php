<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class News
{
    /**
     * @var NewsDataItem[]
     */
    protected $data = [];

    /**
     * @return NewsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param NewsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
