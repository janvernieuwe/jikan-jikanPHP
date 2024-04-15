<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MoreinfoData extends \ArrayObject
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
     * Additional information on the entry.
     *
     * @var string|null
     */
    protected $moreinfo;

    /**
     * Additional information on the entry.
     */
    public function getMoreinfo(): ?string
    {
        return $this->moreinfo;
    }

    /**
     * Additional information on the entry.
     */
    public function setMoreinfo(?string $moreinfo): self
    {
        $this->initialized['moreinfo'] = true;
        $this->moreinfo = $moreinfo;

        return $this;
    }
}
