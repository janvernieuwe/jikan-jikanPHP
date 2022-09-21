<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemImagesJpg
{
    /**
     * Image URL JPG (225x335).
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * Image URL JPG (225x335).
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL JPG (225x335).
     */
    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
