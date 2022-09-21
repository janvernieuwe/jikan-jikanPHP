<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStaff
{
    /**
     * @var AnimeStaffDataItem[]
     */
    protected $data = [];

    /**
     * @return AnimeStaffDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AnimeStaffDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
