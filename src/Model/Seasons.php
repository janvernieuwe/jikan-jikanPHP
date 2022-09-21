<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Seasons
{
    /**
     * @var SeasonsDataItem[]
     */
    protected $data = [];

    /**
     * @return SeasonsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SeasonsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
