<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserImagesJpg
{
    /**
     * Image URL JPG.
     *
     * @var string|null
     */
    protected $imageUrl;

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
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
