<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemImagesWebp
{
    /**
     * Image URL WEBP (225x335).
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * Image URL WEBP (225x335).
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL WEBP (225x335).
     */
    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
