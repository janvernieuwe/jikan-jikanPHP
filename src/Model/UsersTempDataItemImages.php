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
     *
     * @return UsersTempDataItemImagesJpg
     */
    public function getJpg(): UsersTempDataItemImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param UsersTempDataItemImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(UsersTempDataItemImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     *
     * @return UsersTempDataItemImagesWebp
     */
    public function getWebp(): UsersTempDataItemImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     *
     * @param UsersTempDataItemImagesWebp $webp
     *
     * @return self
     */
    public function setWebp(UsersTempDataItemImagesWebp $webp): self
    {
        $this->webp = $webp;

        return $this;
    }
}
