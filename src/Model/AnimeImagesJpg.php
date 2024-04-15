<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeImagesJpg extends ArrayObject
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
     * Image URL JPG.
     *
     * @var string|null
     */
    protected $imageUrl;

    /**
     * Small Image URL JPG.
     *
     * @var string|null
     */
    protected $smallImageUrl;

    /**
     * Image URL JPG.
     *
     * @var string|null
     */
    protected $largeImageUrl;

    /**
     * Image URL JPG.
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL JPG.
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Small Image URL JPG.
     */
    public function getSmallImageUrl(): ?string
    {
        return $this->smallImageUrl;
    }

    /**
     * Small Image URL JPG.
     */
    public function setSmallImageUrl(?string $smallImageUrl): self
    {
        $this->initialized['smallImageUrl'] = true;
        $this->smallImageUrl = $smallImageUrl;

        return $this;
    }

    /**
     * Image URL JPG.
     */
    public function getLargeImageUrl(): ?string
    {
        return $this->largeImageUrl;
    }

    /**
     * Image URL JPG.
     */
    public function setLargeImageUrl(?string $largeImageUrl): self
    {
        $this->initialized['largeImageUrl'] = true;
        $this->largeImageUrl = $largeImageUrl;

        return $this;
    }
}
