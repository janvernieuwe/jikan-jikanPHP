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
     */
    public function getYoutubeId(): ?string
    {
        return $this->youtubeId;
    }

    /**
     * YouTube ID.
     */
    public function setYoutubeId(?string $youtubeId): self
    {
        $this->youtubeId = $youtubeId;

        return $this;
    }

    /**
     * YouTube URL.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * YouTube URL.
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Parsed Embed URL.
     */
    public function getEmbedUrl(): ?string
    {
        return $this->embedUrl;
    }

    /**
     * Parsed Embed URL.
     */
    public function setEmbedUrl(?string $embedUrl): self
    {
        $this->embedUrl = $embedUrl;

        return $this;
    }

    public function getImages(): TrailerImagesImages
    {
        return $this->images;
    }

    public function setImages(TrailerImagesImages $trailerImagesImages): self
    {
        $this->images = $trailerImagesImages;

        return $this;
    }
}
