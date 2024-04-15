<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeVideosData extends ArrayObject
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
     * @var list<AnimeVideosDataPromoItem>
     */
    protected $promo;

    /**
     * @var list<AnimeVideosDataEpisodesItem>
     */
    protected $episodes;

    /**
     * @var list<AnimeVideosDataMusicVideosItem>
     */
    protected $musicVideos;

    /**
     * @return list<AnimeVideosDataPromoItem>
     */
    public function getPromo(): array
    {
        return $this->promo;
    }

    /**
     * @param list<AnimeVideosDataPromoItem> $promo
     */
    public function setPromo(array $promo): self
    {
        $this->initialized['promo'] = true;
        $this->promo = $promo;

        return $this;
    }

    /**
     * @return list<AnimeVideosDataEpisodesItem>
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * @param list<AnimeVideosDataEpisodesItem> $episodes
     */
    public function setEpisodes(array $episodes): self
    {
        $this->initialized['episodes'] = true;
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * @return list<AnimeVideosDataMusicVideosItem>
     */
    public function getMusicVideos(): array
    {
        return $this->musicVideos;
    }

    /**
     * @param list<AnimeVideosDataMusicVideosItem> $musicVideos
     */
    public function setMusicVideos(array $musicVideos): self
    {
        $this->initialized['musicVideos'] = true;
        $this->musicVideos = $musicVideos;

        return $this;
    }
}
