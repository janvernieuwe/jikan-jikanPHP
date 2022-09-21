<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeImagesJpg
{
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
        $this->largeImageUrl = $largeImageUrl;

        return $this;
    }
}
