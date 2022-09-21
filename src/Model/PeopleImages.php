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
     */
    public function getJpg(): PeopleImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     */
    public function setJpg(PeopleImagesJpg $peopleImagesJpg): self
    {
        $this->jpg = $peopleImagesJpg;

        return $this;
    }
}
