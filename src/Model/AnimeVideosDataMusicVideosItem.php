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
        $this->title = $title;

        return $this;
    }

    /**
     * Youtube Details.
     */
    public function getVideo(): Trailer
    {
        return $this->video;
    }

    /**
     * Youtube Details.
     */
    public function setVideo(Trailer $trailer): self
    {
        $this->video = $trailer;

        return $this;
    }

    public function getMeta(): AnimeVideosDataMusicVideosItemMeta
    {
        return $this->meta;
    }

    public function setMeta(AnimeVideosDataMusicVideosItemMeta $animeVideosDataMusicVideosItemMeta): self
    {
        $this->meta = $animeVideosDataMusicVideosItemMeta;

        return $this;
    }
}
