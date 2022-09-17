<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class TrailerImages
{
    /**
     * @var TrailerImagesImages
     */
    protected $images;

    /**
     * @return TrailerImagesImages
     */
    public function getImages(): TrailerImagesImages
    {
        return $this->images;
    }

    /**
     * @param TrailerImagesImages $images
     *
     * @return self
     */
    public function setImages(TrailerImagesImages $images): self
    {
        $this->images = $images;

        return $this;
    }
}
