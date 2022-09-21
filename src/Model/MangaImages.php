<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaImages
{
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
    public function setJpg(MangaImagesJpg $mangaImagesJpg): self
    {
        $this->jpg = $mangaImagesJpg;

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
    public function setWebp(MangaImagesWebp $mangaImagesWebp): self
    {
        $this->webp = $mangaImagesWebp;

        return $this;
    }
}
