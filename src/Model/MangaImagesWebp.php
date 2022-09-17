<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaImagesWebp
{
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
     *
     * @var string|null
     */
    protected $largeImageUrl;

    /**
     * Image URL WEBP.
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL WEBP.
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
     * Small Image URL WEBP.
     *
     * @return string|null
     */
    public function getSmallImageUrl(): ?string
    {
        return $this->smallImageUrl;
    }

    /**
     * Small Image URL WEBP.
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
     * Image URL WEBP.
     *
     * @return string|null
     */
    public function getLargeImageUrl(): ?string
    {
        return $this->largeImageUrl;
    }

    /**
     * Image URL WEBP.
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
