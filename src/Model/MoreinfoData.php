<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MoreinfoData
{
    /**
     * Additional information on the entry.
     *
     * @var string|null
     */
    protected $moreinfo;

    /**
     * Additional information on the entry.
     *
     * @return string|null
     */
    public function getMoreinfo(): ?string
    {
        return $this->moreinfo;
    }

    /**
     * Additional information on the entry.
     *
     * @param string|null $moreinfo
     *
     * @return self
     */
    public function setMoreinfo(?string $moreinfo): self
    {
        $this->moreinfo = $moreinfo;

        return $this;
    }
}
