<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Trailer
{
    /**
     * YouTube ID.
     *
     * @var string|null
     */
    protected $youtubeId;
    /**
     * YouTube URL.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Parsed Embed URL.
     *
     * @var string|null
     */
    protected $embedUrl;
    /**
     * @var TrailerImagesImages
     */
    protected $images;

    /**
     * YouTube ID.
     *
     * @return string|null
     */
    public function getYoutubeId(): ?string
    {
        return $this->youtubeId;
    }

    /**
     * YouTube ID.
     *
     * @param string|null $youtubeId
     *
     * @return self
     */
    public function setYoutubeId(?string $youtubeId): self
    {
        $this->youtubeId = $youtubeId;

        return $this;
    }

    /**
     * YouTube URL.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * YouTube URL.
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Parsed Embed URL.
     *
     * @return string|null
     */
    public function getEmbedUrl(): ?string
    {
        return $this->embedUrl;
    }

    /**
     * Parsed Embed URL.
     *
     * @param string|null $embedUrl
     *
     * @return self
     */
    public function setEmbedUrl(?string $embedUrl): self
    {
        $this->embedUrl = $embedUrl;

        return $this;
    }

    /**
     * @return TrailerImagesImages
     */
    public function getImages(): TrailerImagesImages
    {
        return $this->images;
    }

    /**
     * @param TrailerImagesImages $images
     *
     * @return self
     */
    public function setImages(TrailerImagesImages $images): self
    {
        $this->images = $images;

        return $this;
    }
}
