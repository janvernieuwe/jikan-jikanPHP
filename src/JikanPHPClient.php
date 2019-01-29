<?php

namespace Jikan\JikanPHP;

use Jikan\JikanPHP\Serializer\SerializerFactory;
use Jikan\Request;
use JMS\Serializer\Serializer;

/**
 * Class JikanPHPClient
 *
 * @package Jikan\JikanPHP
 */
class JikanPHPClient
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * JikanPHPClient constructor.
     *
     * @param \GuzzleHttp\Client|null $guzzle
     */
    public function __construct(\GuzzleHttp\Client $guzzle = null)
    {
        $this->guzzle = $guzzle ?? new \GuzzleHttp\Client();
        $this->serializer = SerializerFactory::create();
    }

    /**
     * @param Request\Anime\AnimeRequest $request
     *
     * @return \Jikan\Model\Anime\Anime
     */
    public function getAnime(Request\Anime\AnimeRequest $request): \Jikan\Model\Anime\Anime
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            \Jikan\Model\Anime\Anime::class,
            'json'
        );
    }


    /**
     * @param Request\Anime\AnimeEpisodesRequest $request
     *
     * @return \Jikan\Model\Anime\Episodes
     * @throws \HttpResponseException
     */
    public function getAnimeEpisodes(Request\Anime\AnimeEpisodesRequest $request): \Jikan\Model\Anime\Episodes
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            \Jikan\Model\Anime\Episodes::class,
            'json'
        );
    }

    /**
     * @param Request\Anime\AnimeVideosRequest $request
     *
     * @return \Jikan\Model\Anime\AnimeVideos
     * @throws \HttpResponseException
     */
    public function getAnimeVideos(Request\Anime\AnimeVideosRequest $request): \Jikan\Model\Anime\AnimeVideos
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            \Jikan\Model\Anime\AnimeVideos::class,
            'json'
        );
    }

    /**
     * @param Request\Manga\MangaRequest $request
     *
     * @return \Jikan\Model\Manga\Manga
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getManga(Request\Manga\MangaRequest $request): \Jikan\Model\Manga\Manga
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Manga\MangaParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Character\CharacterRequest $request
     *
     * @return \Jikan\Model\Character\Character
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getCharacter(Request\Character\CharacterRequest $request): \Jikan\Model\Character\Character
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Character\CharacterParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Person\PersonRequest $request
     *
     * @return \Jikan\Model\Person\Person
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getPerson(Request\Person\PersonRequest $request): \Jikan\Model\Person\Person
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Person\PersonParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\User\UserProfileRequest $request
     *
     * @return \Jikan\Model\User\Profile
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getUserProfile(Request\User\UserProfileRequest $request): \Jikan\Model\User\Profile
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\User\Profile\UserProfileParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\User\UserFriendsRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getUserFriends(Request\User\UserFriendsRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\User\Friends\FriendsParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Seasonal\SeasonalRequest $request
     *
     * @return \Jikan\Model\Seasonal\Seasonal
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getSeasonal(Request\Seasonal\SeasonalRequest $request): \Jikan\Model\Seasonal\Seasonal
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Seasonal\SeasonalParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Producer\ProducerRequest $request
     *
     * @return \Jikan\Model\Producer\Producer
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getProducer(Request\Producer\ProducerRequest $request): \Jikan\Model\Producer\Producer
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Producer\ProducerParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Magazine\MagazineRequest $request
     *
     * @return \Jikan\Model\Magazine\Magazine
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMagazine(Request\Magazine\MagazineRequest $request): \Jikan\Model\Magazine\Magazine
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Magazine\MagazineParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Genre\AnimeGenreRequest $request
     *
     * @return \Jikan\Model\Genre\AnimeGenre
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeGenre(Request\Genre\AnimeGenreRequest $request): \Jikan\Model\Genre\AnimeGenre
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Genre\AnimeGenreParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Genre\MangaGenreRequest $request
     *
     * @return \Jikan\Model\Genre\MangaGenre
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaGenre(Request\Genre\MangaGenreRequest $request): \Jikan\Model\Genre\MangaGenre
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Genre\MangaGenreParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Schedule\ScheduleRequest $request
     *
     * @return \Jikan\Model\Schedule\Schedule
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getSchedule(Request\Schedule\ScheduleRequest $request): \Jikan\Model\Schedule\Schedule
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Schedule\ScheduleParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimeCharactersAndStaffRequest $request
     *
     * @return \Jikan\Model\Anime\AnimeCharactersAndStaff
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeCharactersAndStaff(
        Request\Anime\AnimeCharactersAndStaffRequest $request
    ): \Jikan\Model\Anime\AnimeCharactersAndStaff {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Anime\CharactersAndStaffParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimePicturesRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimePictures(Request\Anime\AnimePicturesRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Common\PicturesPageParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaPicturesRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaPictures(Request\Manga\MangaPicturesRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Common\PicturesPageParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Character\CharacterPicturesRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getCharacterPictures(Request\Character\CharacterPicturesRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Common\PicturesPageParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Person\PersonPicturesRequest $request
     *
     * @return \Jikan\Model\Common\Picture[]
     * @throws ParserException
     */
    public function getPersonPictures(Request\Person\PersonPicturesRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Common\PicturesPageParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\RequestInterface $request
     *
     * @return \Jikan\Model\News\NewsListItem[]
     * @throws ParserException
     */
    public function getNewsList(Request\RequestInterface $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\News\NewsListParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Search\AnimeSearchRequest $request
     *
     * @return \Jikan\Model\Search\AnimeSearch
     * @throws ParserException
     */
    public function getAnimeSearch(Request\Search\AnimeSearchRequest $request): \Jikan\Model\Search\AnimeSearch
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Search\AnimeSearchParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Search\MangaSearchRequest $request
     *
     * @return \Jikan\Model\Search\MangaSearch
     * @throws ParserException
     */
    public function getMangaSearch(Request\Search\MangaSearchRequest $request): \Jikan\Model\Search\MangaSearch
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Search\MangaSearchParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Search\CharacterSearchRequest $request
     *
     * @return \Jikan\Model\Search\CharacterSearch
     * @throws ParserException
     */
    public function getCharacterSearch(Request\Search\CharacterSearchRequest $request): \Jikan\Model\Search\CharacterSearch
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Search\CharacterSearchParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Search\PersonSearchRequest $request
     *
     * @return \Jikan\Model\Search\PersonSearch
     * @throws ParserException
     */
    public function getPersonSearch(Request\Search\PersonSearchRequest $request): \Jikan\Model\Search\PersonSearch
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Search\PersonSearchParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaCharactersRequest $request
     *
     * @return \Jikan\Model\Manga\CharacterListItem[]
     * @throws ParserException
     */
    public function getMangaCharacters(Request\Manga\MangaCharactersRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Manga\CharactersParser($crawler);

            return $parser->getCharacters();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Top\TopAnimeRequest $request
     *
     * @return \Jikan\Model\Top\TopAnime[]
     * @throws ParserException
     */
    public function getTopAnime(Request\Top\TopAnimeRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Top\TopAnimeParser($crawler);

            return $parser->getTopAnime();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Top\TopMangaRequest $request
     *
     * @return \Jikan\Model\Top\TopManga[]
     * @throws ParserException
     */
    public function getTopManga(Request\Top\TopMangaRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Top\TopMangaParser($crawler);

            return $parser->getTopManga();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Top\TopCharactersRequest $request
     *
     * @return \Jikan\Model\Top\TopCharacter[]
     * @throws ParserException
     */
    public function getTopCharacters(Request\Top\TopCharactersRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Top\TopCharactersParser($crawler);

            return $parser->getTopCharacters();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Top\TopPeopleRequest $request
     *
     * @return \Jikan\Model\Top\TopPerson[]
     * @throws ParserException
     */
    public function getTopPeople(Request\Top\TopPeopleRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Top\TopPeopleParser($crawler);

            return $parser->getTopPeople();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimeStatsRequest $request
     *
     * @return \Jikan\Model\Anime\AnimeStats
     * @throws ParserException
     */
    public function getAnimeStats(Request\Anime\AnimeStatsRequest $request): \Jikan\Model\Anime\AnimeStats
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Anime\AnimeStatsParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaStatsRequest $request
     *
     * @return \Jikan\Model\Manga\MangaStats
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaStats(Request\Manga\MangaStatsRequest $request): \Jikan\Model\Manga\MangaStats
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Manga\MangaStatsParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimeForumRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeForum(Request\Anime\AnimeForumRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Forum\ForumPageParser($crawler);

            return $parser->getTopics();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaForumRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaForum(Request\Manga\MangaForumRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Forum\ForumPageParser($crawler);

            return $parser->getTopics();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimeMoreInfoRequest $request
     *
     * @return string|null
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeMoreInfo(Request\Anime\AnimeMoreInfoRequest $request): ?string
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Anime\MoreInfoParser($crawler);

            return $parser->getModel()->getMoreInfo();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaMoreInfoRequest $request
     *
     * @return string|null
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaMoreInfo(Request\Manga\MangaMoreInfoRequest $request): ?string
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Manga\MoreInfoParser($crawler);

            return $parser->getModel()->getMoreInfo();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\SeasonList\SeasonListRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getSeasonList(Request\SeasonList\SeasonListRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\SeasonList\SeasonListParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\User\UserHistoryRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getUserHistory(Request\User\UserHistoryRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\User\History\HistoryParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\User\UserAnimeListRequest $request
     *
     * @return \Jikan\Model\User\AnimeListItem[]
     * @throws ParserException
     */
    public function getUserAnimeList(Request\User\UserAnimeListRequest $request): array
    {
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->get($request->getPath());
            $list = json_decode($response->getBody()->getContents());

            $model = [];
            foreach ($list as $item) {
                $model[] = Model\User\AnimeListItem::factory($item);
            }

            return $model;
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\User\UserMangaListRequest $request
     *
     * @return array
     * @throws ParserException
     */
    public function getUserMangaList(Request\User\UserMangaListRequest $request): array
    {
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->get($request->getPath());
            $list = json_decode($response->getBody()->getContents());

            $model = [];
            foreach ($list as $item) {
                $model[] = Model\User\MangaListItem::factory($item);
            }

            return $model;
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }


    /**
     * @param Request\Anime\AnimeRecentlyUpdatedByUsersRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeRecentlyUpdatedByUsers(Request\Anime\AnimeRecentlyUpdatedByUsersRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Anime\AnimeRecentlyUpdatedByUsersParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaRecentlyUpdatedByUsersRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaRecentlyUpdatedByUsers(Request\Manga\MangaRecentlyUpdatedByUsersRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Manga\MangaRecentlyUpdatedByUsersParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimeRecommendationsRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeRecommendations(Request\Anime\AnimeRecommendationsRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Common\Recommendations($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaRecommendationsRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaRecommendations(Request\Manga\MangaRecommendationsRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());

        try {
            $parser = new Parser\Common\Recommendations($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Club\UserListRequest $request
     *
     * @return \Jikan\Model\Club\UserProfile[]
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getClubUsers(Request\Club\UserListRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());

        try {
            $parser = new Parser\Club\UserListParser($crawler);

            return $parser->getResults();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Anime\AnimeReviewsRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getAnimeReviews(Request\Anime\AnimeReviewsRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());
        try {
            $parser = new Parser\Anime\AnimeReviewsParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Manga\MangaReviewsRequest $request
     *
     * @return array
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getMangaReviews(Request\Manga\MangaReviewsRequest $request): array
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());

        try {
            $parser = new Parser\Manga\MangaReviewsParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }

    /**
     * @param Request\Club\ClubRequest $request
     *
     * @return \Jikan\Model\Club\Club
     * @throws ParserException
     * @throws \HttpResponseException
     */
    public function getClub(Request\Club\ClubRequest $request): \Jikan\Model\Club\Club
    {
        $crawler = $this->ghoutte->request('GET', $request->getPath());

        try {
            $parser = new Parser\Club\ClubParser($crawler);

            return $parser->getModel();
        } catch (\Exception $e) {
            throw ParserException::fromRequest($request, $e);
        }
    }
}
