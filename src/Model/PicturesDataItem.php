<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PicturesDataItem extends \ArrayObject
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
     * @var AnimeImages
     */
    protected $images;

    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    public function setImages(AnimeImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}
