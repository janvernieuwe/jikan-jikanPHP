<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PeopleImages
{
    /**
     * Available images in JPG.
     *
     * @var PeopleImagesJpg
     */
    protected $jpg;

    /**
     * Available images in JPG.
     *
     * @return PeopleImagesJpg
     */
    public function getJpg(): PeopleImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param PeopleImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(PeopleImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }
}
