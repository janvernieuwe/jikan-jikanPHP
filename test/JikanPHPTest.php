<?php

namespace JikanPHP\Test;

use Jikan\JikanPHP\JikanPHPClient;
use Jikan\Model;
use Jikan\Request;
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
     * @vcr it_gets_anime.yaml
     */
    public function it_gets_anime()
    {
        $request = new Request\Anime\AnimeRequest(1);
        $anime = $this->jikan->getAnime($request);
        self::assertInstanceOf(Model\Anime\Anime::class, $anime);
    }

    /**
     * @test
     * @vcr it_gets_anime_episodes.yaml
     */
    public function it_gets_anime_episodes()
    {
        $request = new Request\Anime\AnimeEpisodesRequest(1);
        $episodes = $this->jikan->getAnimeEpisodes($request);
        self::assertNotCount(0, $episodes->getEpisodes());
        self::assertContainsOnly(Model\Anime\EpisodeListItem::class, $episodes->getEpisodes());
    }

    /**
     * @test
     * @vcr it_gets_anime_videos.yaml
     */
    public function it_gets_anime_videos()
    {
        $request = new Request\Anime\AnimeVideosRequest(1);
        $videos = $this->jikan->getAnimeVideos($request);
        self::assertNotCount(0, $videos->getPromos());
        self::assertContainsOnly(Model\Anime\PromoListItem::class, $videos->getPromos());
    }

    /**
     * @test
     * @vcr it_gets_manga.yaml
     */
    public function it_gets_manga()
    {
        $request = new Request\Manga\MangaRequest(1);
        $manga = $this->jikan->getManga($request);
        self::assertInstanceOf(Model\Manga\Manga::class, $manga);
    }

    /**
     * @test
     * @vcr it_gets_characters.yaml
     */
    public function it_gets_characters()
    {
        $request = new Request\Character\CharacterRequest(1);
        $response = $this->jikan->getCharacter($request);
        self::assertInstanceOf(Model\Character\Character::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_persons.yaml
     */
    public function it_gets_persons()
    {
        $request = new Request\Person\PersonRequest(1);
        $response = $this->jikan->getPerson($request);
        self::assertInstanceOf(Model\Person\Person::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_user_profile.yaml
     */
    public function it_gets_user_profile()
    {
        $request = new Request\User\UserProfileRequest('sandshark');
        $response = $this->jikan->getUserProfile($request);
        self::assertInstanceOf(Model\User\Profile::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_user_friends.yaml
     */
    public function it_gets_user_friends()
    {
        $request = new Request\User\UserFriendsRequest('sandshark');
        $response = $this->jikan->getUserFriends($request);
        self::assertNotCount(0, $response);
        self::assertContainsOnly(Model\User\Friend::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_seasonal.yaml
     */
    public function it_gets_seasonal()
    {
        $request = new Request\Seasonal\SeasonalRequest(2018, 'winter');
        $response = $this->jikan->getSeasonal($request);
        self::assertInstanceOf(Model\Seasonal\Seasonal::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_producers.yaml
     */
    public function it_gets_producers()
    {
        $request = new Request\Producer\ProducerRequest(1);
        $response = $this->jikan->getProducer($request);
        self::assertInstanceOf(Model\Producer\Producer::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_magazines.yaml
     */
    public function it_gets_magazines()
    {
        $request = new Request\Magazine\MagazineRequest(1);
        $response = $this->jikan->getMagazine($request);
        self::assertInstanceOf(Model\Magazine\Magazine::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_genres.yaml
     */
    public function it_gets_anime_genres()
    {
        $request = new Request\Genre\AnimeGenreRequest(1);
        $response = $this->jikan->getAnimeGenre($request);
        self::assertInstanceOf(Model\Genre\AnimeGenre::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_genres.yaml
     */
    public function it_gets_manga_genres()
    {
        $request = new Request\Genre\MangaGenreRequest(1);
        $response = $this->jikan->getMangaGenre($request);
        self::assertInstanceOf(Model\Genre\MangaGenre::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_schedule.yaml
     */
    public function it_gets_schedule()
    {
        $request = new Request\Schedule\ScheduleRequest();
        $response = $this->jikan->getSchedule($request);
        self::assertInstanceOf(Model\Schedule\Schedule::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_characters_and_staff.yaml
     */
    public function it_gets_anime_characters_and_staff()
    {
        $request = new Request\Anime\AnimeCharactersAndStaffRequest(1);
        $response = $this->jikan->getAnimeCharactersAndStaff($request);
        self::assertInstanceOf(Model\Anime\AnimeCharactersAndStaff::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_pictures.yaml
     */
    public function it_gets_anime_pictures()
    {
        $request = new Request\Anime\AnimePicturesRequest(1);
        $response = $this->jikan->getAnimePictures($request);
        self::assertNotCount(0, $response);
        self::assertContainsOnly(Model\Common\Picture::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_pictures.yaml
     */
    public function it_gets_manga_pictures()
    {
        $request = new Request\Manga\MangaPicturesRequest(1);
        $response = $this->jikan->getMangaPictures($request);
        self::assertNotCount(0, $response);
        self::assertContainsOnly(Model\Common\Picture::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_character_pictures.yaml
     */
    public function it_gets_character_pictures()
    {
        $request = new Request\Character\CharacterPicturesRequest(1);
        $response = $this->jikan->getCharacterPictures($request);
        self::assertNotCount(0, $response);
        self::assertContainsOnly(Model\Common\Picture::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_person_pictures.yaml
     */
    public function it_gets_person_pictures()
    {
        $request = new Request\Person\PersonPicturesRequest(1);
        $response = $this->jikan->getPersonPictures($request);
        self::assertNotCount(0, $response);
        self::assertContainsOnly(Model\Common\Picture::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_search.yaml
     */
    public function it_gets_anime_search()
    {
        $request = new Request\Search\AnimeSearchRequest('Ghost In The Shell');
        $response = $this->jikan->getAnimeSearch($request);
        self::assertInstanceOf(Model\Search\AnimeSearch::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_search.yaml
     */
    public function it_gets_manga_search()
    {
        $request = new Request\Search\MangaSearchRequest('One Piece');
        $response = $this->jikan->getMangaSearch($request);
        self::assertInstanceOf(Model\Search\MangaSearch::class, $response);
    }
}
