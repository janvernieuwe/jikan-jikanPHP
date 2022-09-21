<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideos
{
    /**
     * @var AnimeVideosData
     */
    protected $data;

    public function getData(): AnimeVideosData
    {
        return $this->data;
    }

    public function setData(AnimeVideosData $animeVideosData): self
    {
        $this->data = $animeVideosData;

        return $this;
    }
}
