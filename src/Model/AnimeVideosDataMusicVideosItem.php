<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeVideosDataMusicVideosItem extends ArrayObject
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
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Youtube Details.
     *
     * @var array<string, mixed>
     */
    protected $video;

    /**
     * @var AnimeVideosDataMusicVideosItemMeta
     */
    protected $meta;

    /**
     * Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Youtube Details.
     *
     * @return array<string, mixed>
     */
    public function getVideo(): iterable
    {
        return $this->video;
    }

    /**
     * Youtube Details.
     *
     * @param array<string, mixed> $video
     */
    public function setVideo(iterable $video): self
    {
        $this->initialized['video'] = true;
        $this->video = $video;

        return $this;
    }

    public function getMeta(): AnimeVideosDataMusicVideosItemMeta
    {
        return $this->meta;
    }

    public function setMeta(AnimeVideosDataMusicVideosItemMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }
}
