<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemImages
{
    /**
     * Available images in JPG.
     *
     * @var UsersTempDataItemImagesJpg
     */
    protected $jpg;

    /**
     * Available images in WEBP.
     *
     * @var UsersTempDataItemImagesWebp
     */
    protected $webp;

    /**
     * Available images in JPG.
     */
    public function getJpg(): UsersTempDataItemImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     */
    public function setJpg(UsersTempDataItemImagesJpg $usersTempDataItemImagesJpg): self
    {
        $this->jpg = $usersTempDataItemImagesJpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     */
    public function getWebp(): UsersTempDataItemImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     */
    public function setWebp(UsersTempDataItemImagesWebp $usersTempDataItemImagesWebp): self
    {
        $this->webp = $usersTempDataItemImagesWebp;

        return $this;
    }
}
