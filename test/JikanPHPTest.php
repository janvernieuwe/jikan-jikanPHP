<?php

namespace JikanPHP\Test;

use Jikan\JikanPHP\JikanPHPClient;
use Jikan\Model\Anime\Anime;
use Jikan\Model\Anime\EpisodeListItem;
use Jikan\Model\Anime\PromoListItem;
use Jikan\Model\Manga\Manga;
use Jikan\Request\Anime\AnimeEpisodesRequest;
use Jikan\Request\Anime\AnimeRequest;
use Jikan\Request\Anime\AnimeVideosRequest;
use Jikan\Request\Manga\MangaRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class JikanPHPTest
 *
 * @package JikanPHP\Test
 */
class JikanPHPTest extends TestCase
{
    /**
     * @var JikanPHPClient
     */
    private $jikan;

    public function setUp()
    {
        $this->jikan = new JikanPHPClient();
    }

    /**
     * @test
     * @vcr anime.yaml
     */
    public function it_gets_anime()
    {
        $request = new AnimeRequest(1);
        $anime = $this->jikan->getAnime($request);
        self::assertInstanceOf(Anime::class, $anime);
    }

    /**
     * @test
     * @vcr anime_episodes.yaml
     */
    public function it_gets_anime_episodes()
    {
        $request = new AnimeEpisodesRequest(1);
        $episodes = $this->jikan->getAnimeEpisodes($request);
        self::assertNotCount(0, $episodes->getEpisodes());
        self::assertContainsOnly(EpisodeListItem::class, $episodes->getEpisodes());
    }

    /**
     * @test
     * @vcr anime_videos.yaml
     */
    public function it_gets_anime_videos()
    {
        $request = new AnimeVideosRequest(1);
        $videos = $this->jikan->getAnimeVideos($request);
        self::assertNotCount(0, $videos->getPromos());
        self::assertContainsOnly(PromoListItem::class, $videos->getPromos());
    }

    /**
     * @test
     * @vcr manga.yaml
     */
    public function it_gets_manga()
    {
        $request = new MangaRequest(1);
        $manga = $this->jikan->getManga($request);
        self::assertInstanceOf(Manga::class, $manga);
    }
}
