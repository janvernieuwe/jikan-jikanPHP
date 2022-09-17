<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterPicturesDataItem
{
    /**
     * Default JPG Image Size URL.
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * Large JPG Image Size URL.
     *
     * @var string|null
     */
    protected $largeImageUrl;

    /**
     * Default JPG Image Size URL.
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Default JPG Image Size URL.
     *
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Large JPG Image Size URL.
     *
     * @return string|null
     */
    public function getLargeImageUrl(): ?string
    {
        return $this->largeImageUrl;
    }

    /**
     * Large JPG Image Size URL.
     *
     * @param string|null $largeImageUrl
     *
     * @return self
     */
    public function setLargeImageUrl(?string $largeImageUrl): self
    {
        $this->largeImageUrl = $largeImageUrl;

        return $this;
    }
}
