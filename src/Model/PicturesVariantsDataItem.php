<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PicturesVariantsDataItem
{
    /**
     * @var CommonImages
     */
    protected $images;

    /**
     * @return CommonImages
     */
    public function getImages(): CommonImages
    {
        return $this->images;
    }

    /**
     * @param CommonImages $images
     *
     * @return self
     */
    public function setImages(CommonImages $images): self
    {
        $this->images = $images;

        return $this;
    }
}
