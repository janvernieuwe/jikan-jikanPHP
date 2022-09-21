<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosData
{
    /**
     * @var AnimeVideosDataPromoItem[]
     */
    protected $promo = [];

    /**
     * @var AnimeVideosDataEpisodesItem[]
     */
    protected $episodes = [];

    /**
     * @var AnimeVideosDataMusicVideosItem[]
     */
    protected $musicVideos = [];

    /**
     * @return AnimeVideosDataPromoItem[]
     */
    public function getPromo(): array
    {
        return $this->promo;
    }

    /**
     * @param AnimeVideosDataPromoItem[] $promo
     */
    public function setPromo(array $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * @return AnimeVideosDataEpisodesItem[]
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * @param AnimeVideosDataEpisodesItem[] $episodes
     */
    public function setEpisodes(array $episodes): self
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * @return AnimeVideosDataMusicVideosItem[]
     */
    public function getMusicVideos(): array
    {
        return $this->musicVideos;
    }

    /**
     * @param AnimeVideosDataMusicVideosItem[] $musicVideos
     */
    public function setMusicVideos(array $musicVideos): self
    {
        $this->musicVideos = $musicVideos;

        return $this;
    }
}
