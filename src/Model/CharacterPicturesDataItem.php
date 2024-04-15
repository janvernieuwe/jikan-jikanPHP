<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterPicturesDataItem extends \ArrayObject
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
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Default JPG Image Size URL.
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Large JPG Image Size URL.
     */
    public function getLargeImageUrl(): ?string
    {
        return $this->largeImageUrl;
    }

    /**
     * Large JPG Image Size URL.
     */
    public function setLargeImageUrl(?string $largeImageUrl): self
    {
        $this->initialized['largeImageUrl'] = true;
        $this->largeImageUrl = $largeImageUrl;

        return $this;
    }
}
