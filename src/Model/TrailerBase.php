<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class TrailerBase extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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
        $this->initialized['youtubeId'] = true;
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
        $this->initialized['url'] = true;
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
        $this->initialized['embedUrl'] = true;
        $this->embedUrl = $embedUrl;

        return $this;
    }
}
