<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeIdFullGetResponse200 extends ArrayObject
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
     * Full anime Resource.
     *
     * @var AnimeFull
     */
    protected $data;

    /**
     * Full anime Resource.
     */
    public function getData(): AnimeFull
    {
        return $this->data;
    }

    /**
     * Full anime Resource.
     */
    public function setData(AnimeFull $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
