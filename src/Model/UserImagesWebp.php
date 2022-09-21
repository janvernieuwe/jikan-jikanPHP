<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserImagesWebp
{
    /**
     * Image URL WEBP.
     *
     * @var string|null
     */
    protected $imageUrl;

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
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
