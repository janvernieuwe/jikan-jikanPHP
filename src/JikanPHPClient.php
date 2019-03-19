<?php

namespace Jikan\JikanPHP;

use GuzzleHttp\Client;
use Jikan\JikanPHP\Serializer\SerializerFactory;
use JikanPHP\Model;
use JikanPHP\Request;
use JMS\Serializer\Serializer;

/**
 * Class JikanPHPClient
 *
 * @package Jikan\JikanPHP
 */
class JikanPHPClient
{
    /**
     * @var Client
     */
    private $guzzle;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * JikanPHPClient constructor.
     *
     * @param Client|null $guzzle
     */
    public function __construct(Client $guzzle = null)
    {
        $this->guzzle = $guzzle ?? new Client();
        $this->serializer = SerializerFactory::create();
    }

    /**
     * @param Request\Anime\AnimeRequest $request
     *
     * @return Model\Anime\Anime
     */
    public function getAnime(Request\Anime\AnimeRequest $request): Model\Anime\Anime
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Anime\Anime::class,
            'json'
        );
    }


    /**
     * @param Request\Anime\AnimeEpisodesRequest $request
     *
     * @return Model\Anime\Episodes
     */
    public function getAnimeEpisodes(Request\Anime\AnimeEpisodesRequest $request): Model\Anime\Episodes
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Anime\Episodes::class,
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeVideosRequest $request
     *
     * @return Model\Anime\AnimeVideos
     */
    public function getAnimeVideos(Request\Anime\AnimeVideosRequest $request): Model\Anime\AnimeVideos
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Anime\AnimeVideos::class,
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaRequest $request
     *
     * @return Model\Manga\Manga
     */
    public function getManga(Request\Manga\MangaRequest $request): Model\Manga\Manga
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Manga\Manga::class,
            'json'
        );
    }

    /**
     * @param Request\Character\CharacterRequest $request
     *
     * @return Model\Character\Character
     */
    public function getCharacter(Request\Character\CharacterRequest $request): Model\Character\Character
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Character\Character::class,
            'json'
        );
    }

    /**
     * @param Request\Person\PersonRequest $request
     *
     * @return Model\Person\Person
     */
    public function getPerson(Request\Person\PersonRequest $request): Model\Person\Person
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Person\Person::class,
            'json'
        );
    }

    /**
     * @param Request\User\UserProfileRequest $request
     *
     * @return Model\User\Profile
     */
    public function getUserProfile(Request\User\UserProfileRequest $request): Model\User\Profile
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\User\Profile::class,
            'json'
        );
    }

    /**
     * @param Request\User\UserFriendsRequest $request
     *
     * @return array
     */
    public function getUserFriends(Request\User\UserFriendsRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $friends = json_decode((string)$response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($friends->friends),
            sprintf('array<%s>', Model\User\Friend::class),
            'json'
        );
    }

    /**
     * @param Request\Seasonal\SeasonalRequest $request
     *
     * @return Model\Seasonal\Seasonal
     */
    public function getSeasonal(Request\Seasonal\SeasonalRequest $request): Model\Seasonal\Seasonal
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Seasonal\Seasonal::class,
            'json'
        );
    }

    /**
     * @param Request\Producer\ProducerRequest $request
     *
     * @return Model\Producer\Producer
     */
    public function getProducer(Request\Producer\ProducerRequest $request): Model\Producer\Producer
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Producer\Producer::class,
            'json'
        );
    }

    /**
     * @param Request\Magazine\MagazineRequest $request
     *
     * @return Model\Magazine\Magazine
     */
    public function getMagazine(Request\Magazine\MagazineRequest $request): Model\Magazine\Magazine
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Magazine\Magazine::class,
            'json'
        );
    }

    /**
     * @param Request\Genre\AnimeGenreRequest $request
     *
     * @return Model\Genre\AnimeGenre
     */
    public function getAnimeGenre(Request\Genre\AnimeGenreRequest $request): Model\Genre\AnimeGenre
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Genre\AnimeGenre::class,
            'json'
        );
    }

    /**
     * @param Request\Genre\MangaGenreRequest $request
     *
     * @return Model\Genre\MangaGenre
     */
    public function getMangaGenre(Request\Genre\MangaGenreRequest $request): Model\Genre\MangaGenre
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Genre\MangaGenre::class,
            'json'
        );
    }

    /**
     * @param Request\Schedule\ScheduleRequest $request
     *
     * @return Model\Schedule\Schedule
     */
    public function getSchedule(Request\Schedule\ScheduleRequest $request): Model\Schedule\Schedule
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Schedule\Schedule::class,
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeCharactersAndStaffRequest $request
     *
     * @return Model\Anime\AnimeCharactersAndStaff
     */
    public function getAnimeCharactersAndStaff(
        Request\Anime\AnimeCharactersAndStaffRequest $request
    ): Model\Anime\AnimeCharactersAndStaff {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Anime\AnimeCharactersAndStaff::class,
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimePicturesRequest $request
     *
     * @return Model\Common\Picture[]
     */
    public function getAnimePictures(Request\Anime\AnimePicturesRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->pictures),
            sprintf('array<%s>', Model\Common\Picture::class),
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaPicturesRequest $request
     *
     * @return Model\Common\Picture[]
     * @throws \HttpResponseException
     */
    public function getMangaPictures(Request\Manga\MangaPicturesRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->pictures),
            sprintf('array<%s>', Model\Common\Picture::class),
            'json'
        );
    }

    /**
     * @param Request\Character\CharacterPicturesRequest $request
     *
     * @return Model\Common\Picture[]
     */
    public function getCharacterPictures(Request\Character\CharacterPicturesRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->pictures),
            sprintf('array<%s>', Model\Common\Picture::class),
            'json'
        );
    }

    /**
     * @param Request\Person\PersonPicturesRequest $request
     *
     * @return Model\Common\Picture[]
     */
    public function getPersonPictures(Request\Person\PersonPicturesRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->pictures),
            sprintf('array<%s>', Model\Common\Picture::class),
            'json'
        );
    }

    /**
     * @param Request\Search\AnimeSearchRequest $request
     *
     * @return Model\Search\AnimeSearch
     */
    public function getAnimeSearch(Request\Search\AnimeSearchRequest $request): Model\Search\AnimeSearch
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Search\AnimeSearch::class,
            'json'
        );
    }

    /**
     * @param Request\Search\MangaSearchRequest $request
     *
     * @return Model\Search\MangaSearch
     */
    public function getMangaSearch(Request\Search\MangaSearchRequest $request): Model\Search\MangaSearch
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Search\MangaSearch::class,
            'json'
        );
    }

    /**
     * @param Request\Search\CharacterSearchRequest $request
     *
     * @return Model\Search\CharacterSearch
     */
    public function getCharacterSearch(Request\Search\CharacterSearchRequest $request): Model\Search\CharacterSearch
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Search\CharacterSearch::class,
            'json'
        );
    }

    /**
     * @param Request\Search\PersonSearchRequest $request
     *
     * @return Model\Search\PersonSearch
     */
    public function getPersonSearch(Request\Search\PersonSearchRequest $request): Model\Search\PersonSearch
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Search\PersonSearch::class,
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaCharactersRequest $request
     *
     * @return Model\Manga\CharacterListItem[]
     */
    public function getMangaCharacters(Request\Manga\MangaCharactersRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->characters),
            sprintf('array<%s>', Model\Manga\CharacterListItem::class),
            'json'
        );
    }

    /**
     * @param Request\Top\TopAnimeRequest $request
     *
     * @return Model\Top\TopAnime[]
     */
    public function getTopAnime(Request\Top\TopAnimeRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->top),
            sprintf('array<%s>', Model\Top\TopAnime::class),
            'json'
        );
    }

    /**
     * @param Request\Top\TopMangaRequest $request
     *
     * @return Model\Top\TopManga[]
     */
    public function getTopManga(Request\Top\TopMangaRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->top),
            sprintf('array<%s>', Model\Top\TopManga::class),
            'json'
        );
    }

    /**
     * @param Request\Top\TopCharactersRequest $request
     *
     * @return Model\Top\TopCharacter[]
     */
    public function getTopCharacters(Request\Top\TopCharactersRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->top),
            sprintf('array<%s>', Model\Top\TopCharacter::class),
            'json'
        );
    }

    /**
     * @param Request\Top\TopPeopleRequest $request
     *
     * @return Model\Top\TopPerson[]
     */
    public function getTopPeople(Request\Top\TopPeopleRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->top),
            sprintf('array<%s>', Model\Top\TopPerson::class),
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeStatsRequest $request
     *
     * @return Model\Anime\AnimeStats
     */
    public function getAnimeStats(Request\Anime\AnimeStatsRequest $request): Model\Anime\AnimeStats
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Anime\AnimeStats::class,
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaStatsRequest $request
     *
     * @return Model\Manga\MangaStats
     */
    public function getMangaStats(Request\Manga\MangaStatsRequest $request): Model\Manga\MangaStats
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Manga\MangaStats::class,
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeForumRequest $request
     *
     * @return Model\Forum\ForumTopic[]
     */
    public function getAnimeForum(Request\Anime\AnimeForumRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->topics),
            sprintf('array<%s>', Model\Forum\ForumTopic::class),
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaForumRequest $request
     *
     * @return Model\Forum\ForumTopic[]
     */
    public function getMangaForum(Request\Manga\MangaForumRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->topics),
            sprintf('array<%s>', Model\Forum\ForumTopic::class),
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeMoreInfoRequest $request
     *
     * @return string|null
     */
    public function getAnimeMoreInfo(Request\Anime\AnimeMoreInfoRequest $request): ?string
    {
        $response = $this->guzzle->get($request->getPath());

        return json_decode($response->getBody()->getContents())->moreinfo ?? null;
    }

    /**
     * @param Request\Manga\MangaMoreInfoRequest $request
     *
     * @return string|null
     */
    public function getMangaMoreInfo(Request\Manga\MangaMoreInfoRequest $request): ?string
    {
        $response = $this->guzzle->get($request->getPath());

        return json_decode($response->getBody()->getContents())->moreinfo ?? null;
    }

    /**
     * @param Request\SeasonList\SeasonListRequest $request
     *
     * @return Model\SeasonList\SeasonListItem[]
     */
    public function getSeasonList(Request\SeasonList\SeasonListRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->archive),
            sprintf('array<%s>', Model\SeasonList\SeasonListItem::class),
            'json'
        );
    }

    /**
     * @param Request\User\UserHistoryRequest $request
     *
     * @return Model\User\History[]
     */
    public function getUserHistory(Request\User\UserHistoryRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->history),
            sprintf('array<%s>', Model\User\History::class),
            'json'
        );
    }

    /**
     * @param Request\User\UserAnimeListRequest $request
     *
     * @return Model\User\AnimeListItem[]
     */
    public function getUserAnimeList(Request\User\UserAnimeListRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->anime),
            sprintf('array<%s>', Model\User\AnimeListItem::class),
            'json'
        );
    }

    /**
     * @param Request\User\UserMangaListRequest $request
     *
     * @return Model\User\MangaListItem[]
     */
    public function getUserMangaList(Request\User\UserMangaListRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->manga),
            sprintf('array<%s>', Model\User\MangaListItem::class),
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeRecentlyUpdatedByUsersRequest $request
     *
     * @return Model\User\AnimeListItem[]
     */
    public function getAnimeRecentlyUpdatedByUsers(Request\Anime\AnimeRecentlyUpdatedByUsersRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->users),
            sprintf('array<%s>', Model\User\AnimeListItem::class),
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaRecentlyUpdatedByUsersRequest $request
     *
     * @return Model\User\MangaListItem[]
     */
    public function getMangaRecentlyUpdatedByUsers(Request\Manga\MangaRecentlyUpdatedByUsersRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->users),
            sprintf('array<%s>', Model\User\MangaListItem::class),
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeRecommendationsRequest $request
     *
     * @return Model\Common\Recommendation[]
     */
    public function getAnimeRecommendations(Request\Anime\AnimeRecommendationsRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->recommendations),
            sprintf('array<%s>', Model\Common\Recommendation::class),
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaRecommendationsRequest $request
     *
     * @return Model\Common\Recommendation[]
     */
    public function getMangaRecommendations(Request\Manga\MangaRecommendationsRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->recommendations),
            sprintf('array<%s>', Model\Common\Recommendation::class),
            'json'
        );
    }

    /**
     * @param Request\Club\UserListRequest $request
     *
     * @return Model\Club\UserProfile[]
     */
    public function getClubUsers(Request\Club\UserListRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->members),
            sprintf('array<%s>', Model\Club\UserProfile::class),
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeReviewsRequest $request
     *
     * @return Model\Anime\AnimeReview[]
     */
    public function getAnimeReviews(Request\Anime\AnimeReviewsRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->reviews),
            sprintf('array<%s>', Model\Anime\AnimeReview::class),
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaReviewsRequest $request
     *
     * @return Model\Manga\MangaReview[]
     */
    public function getMangaReviews(Request\Manga\MangaReviewsRequest $request): array
    {
        $response = $this->guzzle->get($request->getPath());
        $data = json_decode((string) $response->getBody()->getContents());

        return $this->serializer->deserialize(
            json_encode($data->reviews),
            sprintf('array<%s>', Model\Manga\MangaReview::class),
            'json'
        );
    }

    /**
     * @param Request\Club\ClubRequest $request
     *
     * @return Model\Club\Club
     */
    public function getClub(Request\Club\ClubRequest $request): Model\Club\Club
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            Model\Club\Club::class,
            'json'
        );
    }
}
