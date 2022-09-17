<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaImagesJpg
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

    /**
     * Small Image URL JPG.
     *
     * @return string|null
     */
    public function getSmallImageUrl(): ?string
    {
        return $this->smallImageUrl;
    }

    /**
     * Small Image URL JPG.
     *
     * @param string|null $smallImageUrl
     *
     * @return self
     */
    public function setSmallImageUrl(?string $smallImageUrl): self
    {
        $this->smallImageUrl = $smallImageUrl;

        return $this;
    }

    /**
     * Image URL JPG.
     *
     * @return string|null
     */
    public function getLargeImageUrl(): ?string
    {
        return $this->largeImageUrl;
    }

    /**
     * Image URL JPG.
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
