<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterImages
{
    /**
     * Available images in JPG.
     *
     * @var CharacterImagesJpg
     */
    protected $jpg;
    /**
     * Available images in WEBP.
     *
     * @var CharacterImagesWebp
     */
    protected $webp;

    /**
     * Available images in JPG.
     *
     * @return CharacterImagesJpg
     */
    public function getJpg(): CharacterImagesJpg
    {
        return $this->jpg;
    }

    /**
     * Available images in JPG.
     *
     * @param CharacterImagesJpg $jpg
     *
     * @return self
     */
    public function setJpg(CharacterImagesJpg $jpg): self
    {
        $this->jpg = $jpg;

        return $this;
    }

    /**
     * Available images in WEBP.
     *
     * @return CharacterImagesWebp
     */
    public function getWebp(): CharacterImagesWebp
    {
        return $this->webp;
    }

    /**
     * Available images in WEBP.
     *
     * @param CharacterImagesWebp $webp
     *
     * @return self
     */
    public function setWebp(CharacterImagesWebp $webp): self
    {
        $this->webp = $webp;

        return $this;
    }
}
