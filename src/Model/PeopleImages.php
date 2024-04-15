<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PeopleImages extends \ArrayObject
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
     * Available images in JPG.
     *
     * @var PeopleImagesJpg
     */
    protected $jpg;

    /**
     * Available images in JPG.
     */
    public function getJpg(): PeopleImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     */
    public function setJpg(PeopleImagesJpg $jpg): self
    {
        $this->initialized['jpg'] = true;
        $this->jpg = $jpg;

        return $this;
    }
}
