<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CommonImages
{
    /**
     * Available images in JPG.
     *
     * @var CommonImagesJpg
     */
    protected $jpg;

    /**
     * Available images in JPG.
     *
     * @return CommonImagesJpg
     */
    public function getJpg(): CommonImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param CommonImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(CommonImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }
}
