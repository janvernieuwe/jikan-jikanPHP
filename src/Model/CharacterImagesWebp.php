<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class CharacterImagesWebp extends ArrayObject
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
     * Image URL WEBP.
     *
     * @var string|null
     */
    protected $imageUrl;

    /**
     * Small Image URL WEBP.
     *
     * @var string|null
     */
    protected $smallImageUrl;

    /**
     * Image URL WEBP.
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL WEBP.
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Small Image URL WEBP.
     */
    public function getSmallImageUrl(): ?string
    {
        return $this->smallImageUrl;
    }

    /**
     * Small Image URL WEBP.
     */
    public function setSmallImageUrl(?string $smallImageUrl): self
    {
        $this->initialized['smallImageUrl'] = true;
        $this->smallImageUrl = $smallImageUrl;

        return $this;
    }
}
