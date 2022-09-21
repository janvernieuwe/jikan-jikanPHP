<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserImages
{
    /**
     * Available images in JPG.
     *
     * @var UserImagesJpg
     */
    protected $jpg;

    /**
     * Available images in WEBP.
     *
     * @var UserImagesWebp
     */
    protected $webp;

    /**
     * Available images in JPG.
     */
    public function getJpg(): UserImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     */
    public function setJpg(UserImagesJpg $userImagesJpg): self
    {
        $this->jpg = $userImagesJpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     */
    public function getWebp(): UserImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     */
    public function setWebp(UserImagesWebp $userImagesWebp): self
    {
        $this->webp = $userImagesWebp;

        return $this;
    }
}
