<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemImages extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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
    public function setJpg(UsersTempDataItemImagesJpg $jpg): self
    {
        $this->initialized['jpg'] = true;
        $this->jpg = $jpg;

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
    public function setWebp(UsersTempDataItemImagesWebp $webp): self
    {
        $this->initialized['webp'] = true;
        $this->webp = $webp;

        return $this;
    }
}
