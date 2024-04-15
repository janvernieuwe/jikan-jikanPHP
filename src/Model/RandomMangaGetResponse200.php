<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class RandomMangaGetResponse200 extends ArrayObject
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
     * Manga Resource.
     *
     * @var Manga
     */
    protected $data;

    /**
     * Manga Resource.
     */
    public function getData(): Manga
    {
        return $this->data;
    }

    /**
     * Manga Resource.
     */
    public function setData(Manga $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
