<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class TrailerImagesImages
{
    /**
     * Default Image Size URL (120x90).
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * Small Image Size URL (640x480).
     *
     * @var string|null
     */
    protected $smallImageUrl;
    /**
     * Medium Image Size URL (320x180).
     *
     * @var string|null
     */
    protected $mediumImageUrl;
    /**
     * Large Image Size URL (480x360).
     *
     * @var string|null
     */
    protected $largeImageUrl;
    /**
     * Maximum Image Size URL (1280x720).
     *
     * @var string|null
     */
    protected $maximumImageUrl;

    /**
     * Default Image Size URL (120x90).
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Default Image Size URL (120x90).
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
     * Small Image Size URL (640x480).
     *
     * @return string|null
     */
    public function getSmallImageUrl(): ?string
    {
        return $this->smallImageUrl;
    }

    /**
     * Small Image Size URL (640x480).
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
     * Medium Image Size URL (320x180).
     *
     * @return string|null
     */
    public function getMediumImageUrl(): ?string
    {
        return $this->mediumImageUrl;
    }

    /**
     * Medium Image Size URL (320x180).
     *
     * @param string|null $mediumImageUrl
     *
     * @return self
     */
    public function setMediumImageUrl(?string $mediumImageUrl): self
    {
        $this->mediumImageUrl = $mediumImageUrl;

        return $this;
    }

    /**
     * Large Image Size URL (480x360).
     *
     * @return string|null
     */
    public function getLargeImageUrl(): ?string
    {
        return $this->largeImageUrl;
    }

    /**
     * Large Image Size URL (480x360).
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

    /**
     * Maximum Image Size URL (1280x720).
     *
     * @return string|null
     */
    public function getMaximumImageUrl(): ?string
    {
        return $this->maximumImageUrl;
    }

    /**
     * Maximum Image Size URL (1280x720).
     *
     * @param string|null $maximumImageUrl
     *
     * @return self
     */
    public function setMaximumImageUrl(?string $maximumImageUrl): self
    {
        $this->maximumImageUrl = $maximumImageUrl;

        return $this;
    }
}
