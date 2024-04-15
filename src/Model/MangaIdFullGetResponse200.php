<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class MangaIdFullGetResponse200 extends ArrayObject
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
     * @var MangaFull
     */
    protected $data;

    /**
     * Manga Resource.
     */
    public function getData(): MangaFull
    {
        return $this->data;
    }

    /**
     * Manga Resource.
     */
    public function setData(MangaFull $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
