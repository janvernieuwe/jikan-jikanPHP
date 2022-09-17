<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosDataMusicVideosItem
{
    /**
     * Title.
     *
     * @var string
     */
    protected $title;
    /**
     * Youtube Details.
     *
     * @var Trailer
     */
    protected $video;
    /**
     * @var AnimeVideosDataMusicVideosItemMeta
     */
    protected $meta;

    /**
     * Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Youtube Details.
     *
     * @return Trailer
     */
    public function getVideo(): Trailer
    {
        return $this->video;
    }

    /**
     * Youtube Details.
     *
     * @param Trailer $video
     *
     * @return self
     */
    public function setVideo(Trailer $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @return AnimeVideosDataMusicVideosItemMeta
     */
    public function getMeta(): AnimeVideosDataMusicVideosItemMeta
    {
        return $this->meta;
    }

    /**
     * @param AnimeVideosDataMusicVideosItemMeta $meta
     *
     * @return self
     */
    public function setMeta(AnimeVideosDataMusicVideosItemMeta $meta): self
    {
        $this->meta = $meta;

        return $this;
    }
}
