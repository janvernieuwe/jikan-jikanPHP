<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PicturesVariantsDataItem
{
    /**
     * @var CommonImages
     */
    protected $images;

    public function getImages(): CommonImages
    {
        return $this->images;
    }

    public function setImages(CommonImages $commonImages): self
    {
        $this->images = $commonImages;

        return $this;
    }
}
