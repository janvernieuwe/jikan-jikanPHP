<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class MangaImages extends ArrayObject
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
     * @var MangaImagesJpg
     */
    protected $jpg;

    /**
     * Available images in WEBP.
     *
     * @var MangaImagesWebp
     */
    protected $webp;

    /**
     * Available images in JPG.
     */
    public function getJpg(): MangaImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     */
    public function setJpg(MangaImagesJpg $jpg): self
    {
        $this->initialized['jpg'] = true;
        $this->jpg = $jpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     */
    public function getWebp(): MangaImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     */
    public function setWebp(MangaImagesWebp $webp): self
    {
        $this->initialized['webp'] = true;
        $this->webp = $webp;

        return $this;
    }
}
