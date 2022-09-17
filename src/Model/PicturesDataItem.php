<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PicturesDataItem
{
    /**
     * @var AnimeImages
     */
    protected $images;

    /**
     * @return AnimeImages
     */
    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    /**
     * @param AnimeImages $images
     *
     * @return self
     */
    public function setImages(AnimeImages $images): self
    {
        $this->images = $images;

        return $this;
    }
}
