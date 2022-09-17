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
     *
     * @return MangaImagesJpg
     */
    public function getJpg(): MangaImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param MangaImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(MangaImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     *
     * @return MangaImagesWebp
     */
    public function getWebp(): MangaImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     *
     * @param MangaImagesWebp $webp
     *
     * @return self
     */
    public function setWebp(MangaImagesWebp $webp): self
    {
        $this->webp = $webp;

        return $this;
    }
}
