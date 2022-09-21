<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Moreinfo
{
    /**
     * @var MoreinfoData
     */
    protected $data;

    public function getData(): MoreinfoData
    {
        return $this->data;
    }

    public function setData(MoreinfoData $moreinfoData): self
    {
        $this->data = $moreinfoData;

        return $this;
    }
}
