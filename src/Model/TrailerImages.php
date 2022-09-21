<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class TrailerImages
{
    /**
     * @var TrailerImagesImages
     */
    protected $images;

    public function getImages(): TrailerImagesImages
    {
        return $this->images;
    }

    public function setImages(TrailerImagesImages $trailerImagesImages): self
    {
        $this->images = $trailerImagesImages;

        return $this;
    }
}
