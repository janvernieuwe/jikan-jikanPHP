<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PeopleImagesJpg
{
    /**
     * Image URL JPG.
     *
     * @var string|null
     */
    protected $imageUrl;

    /**
     * Image URL JPG.
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL JPG.
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
}
