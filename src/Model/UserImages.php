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
     *
     * @return UserImagesJpg
     */
    public function getJpg(): UserImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param UserImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(UserImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     *
     * @return UserImagesWebp
     */
    public function getWebp(): UserImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     *
     * @param UserImagesWebp $webp
     *
     * @return self
     */
    public function setWebp(UserImagesWebp $webp): self
    {
        $this->webp = $webp;

        return $this;
    }
}
