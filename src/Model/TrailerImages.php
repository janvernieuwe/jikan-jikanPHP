<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class TrailerImages extends ArrayObject
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
     * @var TrailerImagesImages
     */
    protected $images;

    public function getImages(): TrailerImagesImages
    {
        return $this->images;
    }

    public function setImages(TrailerImagesImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}
