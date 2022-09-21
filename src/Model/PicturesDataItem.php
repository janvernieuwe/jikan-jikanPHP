<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PicturesDataItem
{
    /**
     * @var AnimeImages
     */
    protected $images;

    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    public function setImages(AnimeImages $animeImages): self
    {
        $this->images = $animeImages;

        return $this;
    }
}
