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
     */
    public function getJpg(): CommonImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     */
    public function setJpg(CommonImagesJpg $commonImagesJpg): self
    {
        $this->jpg = $commonImagesJpg;

        return $this;
    }
}
