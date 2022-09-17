<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideos
{
    /**
     * @var AnimeVideosData
     */
    protected $data;

    /**
     * @return AnimeVideosData
     */
    public function getData(): AnimeVideosData
    {
        return $this->data;
    }

    /**
     * @param AnimeVideosData $data
     *
     * @return self
     */
    public function setData(AnimeVideosData $data): self
    {
        $this->data = $data;

        return $this;
    }
}
