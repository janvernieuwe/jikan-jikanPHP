<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Moreinfo
{
    /**
     * @var MoreinfoData
     */
    protected $data;

    /**
     * @return MoreinfoData
     */
    public function getData(): MoreinfoData
    {
        return $this->data;
    }

    /**
     * @param MoreinfoData $data
     *
     * @return self
     */
    public function setData(MoreinfoData $data): self
    {
        $this->data = $data;

        return $this;
    }
}
