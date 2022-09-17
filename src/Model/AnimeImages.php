<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeImages
{
    /**
     * Available images in JPG.
     *
     * @var AnimeImagesJpg
     */
    protected $jpg;
    /**
     * Available images in WEBP.
     *
     * @var AnimeImagesWebp
     */
    protected $webp;

    /**
     * Available images in JPG.
     *
     * @return AnimeImagesJpg
     */
    public function getJpg(): AnimeImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param AnimeImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(AnimeImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     *
     * @return AnimeImagesWebp
     */
    public function getWebp(): AnimeImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     *
     * @param AnimeImagesWebp $webp
     *
     * @return self
     */
    public function setWebp(AnimeImagesWebp $webp): self
    {
        $this->webp = $webp;

        return $this;
    }
}
