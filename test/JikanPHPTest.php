<?php

namespace JikanPHP\Test;

use Jikan\JikanPHP\JikanPHPClient;
use JikanPHP\Helper\Constants;
use JikanPHP\Model;
use JikanPHP\Request;
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
        self::assertContainsOnlyInstancesOf(Model\Seasonal\SeasonalAnime::class, $response->getAnime());
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

    /**
     * @test
     * @vcr it_gets_character_search.yaml
     */
    public function it_gets_character_search()
    {
        $request = new Request\Search\CharacterSearchRequest('Revy');
        $response = $this->jikan->getCharacterSearch($request);
        self::assertInstanceOf(Model\Search\CharacterSearch::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_person_search.yaml
     */
    public function it_gets_person_search()
    {
        $request = new Request\Search\PersonSearchRequest('shinkai');
        $response = $this->jikan->getPersonSearch($request);
        self::assertInstanceOf(Model\Search\PersonSearch::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_characters.yaml
     */
    public function it_gets_manga_characters()
    {
        $request = new Request\Manga\MangaCharactersRequest(1);
        $response = $this->jikan->getMangaCharacters($request);
        self::assertContainsOnly(Model\Manga\CharacterListItem::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_top_anime.yaml
     */
    public function it_gets_top_anime()
    {
        $request = new Request\Top\TopAnimeRequest(1, Constants::TOP_UPCOMING);
        $response = $this->jikan->getTopAnime($request);
        self::assertContainsOnly(Model\Top\TopAnime::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_top_manga.yaml
     */
    public function it_gets_top_manga()
    {
        $request = new Request\Top\TopMangaRequest(1, Constants::TOP_MANGA);
        $response = $this->jikan->getTopManga($request);
        self::assertContainsOnly(Model\Top\TopManga::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_top_characters.yaml
     */
    public function it_gets_top_characters()
    {
        $request = new Request\Top\TopCharactersRequest(1);
        $response = $this->jikan->getTopCharacters($request);
        self::assertContainsOnly(Model\Top\TopCharacter::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_top_people.yaml
     */
    public function it_gets_top_people()
    {
        $request = new Request\Top\TopPeopleRequest(1);
        $response = $this->jikan->getTopPeople($request);
        self::assertContainsOnly(Model\Top\TopPerson::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_stats.yaml
     */
    public function it_gets_anime_stats()
    {
        $request = new Request\Anime\AnimeStatsRequest(1);
        $response = $this->jikan->getAnimeStats($request);
        self::assertInstanceOf(Model\Anime\AnimeStats::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_stats.yaml
     */
    public function it_gets_manga_stats()
    {
        $request = new Request\Manga\MangaStatsRequest(1);
        $response = $this->jikan->getMangaStats($request);
        self::assertInstanceOf(Model\Manga\MangaStats::class, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_forum.yaml
     */
    public function it_gets_anime_forum()
    {
        $request = new Request\Anime\AnimeForumRequest(1);
        $response = $this->jikan->getAnimeForum($request);
        self::assertContainsOnly(Model\Forum\ForumTopic::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_forum.yaml
     */
    public function it_gets_manga_forum()
    {
        $request = new Request\Manga\MangaForumRequest(1);
        $response = $this->jikan->getMangaForum($request);
        self::assertContainsOnly(Model\Forum\ForumTopic::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_more_anime_info.yaml
     */
    public function it_gets_more_anime_info()
    {
        $request = new Request\Anime\AnimeMoreInfoRequest(1);
        $response = $this->jikan->getAnimeMoreInfo($request);
        self::assertContains('Suggested Order', $response);
        self::assertContains('(takes place between episodes 22 and 23)', $response);
    }

    /**
     * @test
     * @vcr it_gets_more_manga_info.yaml
     */
    public function it_gets_more_manga_info()
    {
        $request = new Request\Manga\MangaMoreInfoRequest(2);
        $response = $this->jikan->getMangaMoreInfo($request);
        self::assertContains('Berserk: The Prototype', $response);
        self::assertContains('on which the Berserk manga is based.', $response);
    }

    /**
     * @test
     * @vcr it_gets_season_list.yaml
     */
    public function it_gets_season_list()
    {
        $request = new Request\SeasonList\SeasonListRequest();
        $response = $this->jikan->getSeasonList($request);
        self::assertContainsOnly(Model\SeasonList\SeasonListItem::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_user_history.yaml
     */
    public function it_gets_user_history()
    {
        $request = new Request\User\UserHistoryRequest('sandshark', 'anime');
        $response = $this->jikan->getUserHistory($request);
        self::assertContainsOnly(Model\User\History::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_user_anime_list.yaml
     */
    public function it_gets_user_anime_list()
    {
        $request = new Request\User\UserAnimeListRequest('sandshark', 1);
        $response = $this->jikan->getUserAnimeList($request);
        self::assertContainsOnly(Model\User\AnimeListItem::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_user_manga_list.yaml
     */
    public function it_gets_user_manga_list()
    {
        $request = new Request\User\UserMangaListRequest('sandshark', 1);
        $response = $this->jikan->getUserMangaList($request);
        self::assertContainsOnly(Model\User\MangaListItem::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_recently_updated_by_users.yaml
     */
    public function it_gets_anime_recently_updated_by_users()
    {
        $request = new Request\Anime\AnimeRecentlyUpdatedByUsersRequest(1);
        $response = $this->jikan->getAnimeRecentlyUpdatedByUsers($request);
        self::assertContainsOnly(Model\User\AnimeListItem::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_recently_updated_by_users.yaml
     */
    public function it_gets_manga_recently_updated_by_users()
    {
        $request = new Request\Manga\MangaRecentlyUpdatedByUsersRequest(1);
        $response = $this->jikan->getMangaRecentlyUpdatedByUsers($request);
        self::assertContainsOnly(Model\User\MangaListItem::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_recommendations.yaml
     */
    public function it_gets_anime_recommendations()
    {
        $request = new Request\Anime\AnimeRecommendationsRequest(1);
        $response = $this->jikan->getAnimeRecommendations($request);
        self::assertContainsOnly(Model\Common\Recommendation::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_recommendations.yaml
     */
    public function it_gets_manga_recommendations()
    {
        $request = new Request\Manga\MangaRecommendationsRequest(1);
        $response = $this->jikan->getMangaRecommendations($request);
        self::assertContainsOnly(Model\Common\Recommendation::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_club_users.yaml
     */
    public function it_gets_club_users()
    {
        $request = new Request\Club\UserListRequest(21349);
        $response = $this->jikan->getClubUsers($request);
        self::assertContainsOnly(Model\Club\UserProfile::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_anime_reviews.yaml
     */
    public function it_gets_anime_reviews()
    {
        $request = new Request\Anime\AnimeReviewsRequest(1);
        $response = $this->jikan->getAnimeReviews($request);
        self::assertContainsOnly(Model\Anime\AnimeReview::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_manga_reviews.yaml
     */
    public function it_gets_manga_reviews()
    {
        $request = new Request\Manga\MangaReviewsRequest(1);
        $response = $this->jikan->getMangaReviews($request);
        self::assertContainsOnly(Model\Manga\MangaReview::class, $response);
        self::assertNotCount(0, $response);
    }

    /**
     * @test
     * @vcr it_gets_clubs.yaml
     */
    public function it_gets_clubs()
    {
        $request = new Request\Club\ClubRequest(21349);
        $response = $this->jikan->getClub($request);
        self::assertInstanceOf(Model\Club\Club::class, $response);
    }
}
