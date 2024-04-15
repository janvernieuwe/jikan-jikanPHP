<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeIdGetResponse200 extends ArrayObject
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
     * Anime Resource.
     *
     * @var Anime
     */
    protected $data;

    /**
     * Anime Resource.
     */
    public function getData(): Anime
    {
        return $this->data;
    }

    /**
     * Anime Resource.
     */
    public function setData(Anime $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
