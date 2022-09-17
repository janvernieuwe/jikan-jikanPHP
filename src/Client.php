<?php declare(strict_types=1);

namespace Jikan\JikanPHP;

class Client extends \Jikan\JikanPHP\Runtime\Client\Client
{
    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeFullByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeIdFullGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeFullById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeCharactersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeCharacters|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeCharacters(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeCharacters($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeStaffBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeStaff|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeStaff(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeStaff($id), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeEpisodesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeEpisodes|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeEpisodes(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeEpisodes($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param int    $episode
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeEpisodeByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeIdEpisodesEpisodeGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeEpisodeById(int $id, int $episode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeEpisodeById($id, $episode), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeNewsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeNews|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeNews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeNews($id, $queryParameters), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var string $filter Filter topics
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeForumBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Forum|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeForum(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeForum($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeVideosBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeVideos|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeVideos(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeVideos($id), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeVideosEpisodesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeVideosEpisodes|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeVideosEpisodes(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeVideosEpisodes($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimePicturesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PicturesVariants|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimePictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimePictures($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeStatisticsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeStatistics|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeStatistics(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeStatistics($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeMoreInfoBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Moreinfo|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeMoreInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeMoreInfo($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeRecommendationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\EntryRecommendations|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeRecommendations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeRecommendations($id), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeUserUpdatesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeUserupdates|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeUserUpdates(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeUserUpdates($id, $queryParameters), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeReviewsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeReviews|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeReviews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeReviews($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeIdRelationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeRelations($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeThemesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeThemes|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeThemes(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeThemes($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeExternalBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ExternalLinks|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeExternal($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeStreamingBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ExternalLinks|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeStreaming(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeStreaming($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharacterFullByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharactersIdFullGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCharacterFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharacterFullById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharacterByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharactersIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCharacterById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharacterById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharacterAnimeBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharacterAnime|\Psr\Http\Message\ResponseInterface
     */
    public function getCharacterAnime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharacterAnime($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharacterMangaBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharacterManga|\Psr\Http\Message\ResponseInterface
     */
    public function getCharacterManga(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharacterManga($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharacterVoiceActorsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharacterVoiceActors|\Psr\Http\Message\ResponseInterface
     */
    public function getCharacterVoiceActors(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharacterVoiceActors($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharacterPicturesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharacterPictures|\Psr\Http\Message\ResponseInterface
     */
    public function getCharacterPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharacterPictures($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetClubsByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ClubsIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getClubsById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetClubsById($id), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetClubMembersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ClubsIdMembersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getClubMembers(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetClubMembers($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetClubStaffBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ClubStaff|\Psr\Http\Message\ResponseInterface
     */
    public function getClubStaff(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetClubStaff($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetClubRelationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ClubRelations|\Psr\Http\Message\ResponseInterface
     */
    public function getClubRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetClubRelations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeGenresBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Genres|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeGenres(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeGenres($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaGenresBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Genres|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaGenres(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaGenres($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMagazinesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Magazines|\Psr\Http\Message\ResponseInterface
     */
    public function getMagazines(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMagazines($queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaFullByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaIdFullGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaFullById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaCharactersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaCharacters|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaCharacters(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaCharacters($id), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaNewsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaNews|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaNews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaNews($id, $queryParameters), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var string $filter Filter topics
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaTopicsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Forum|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaTopics(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaTopics($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaPicturesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaPictures|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaPictures($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaStatisticsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaStatistics|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaStatistics(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaStatistics($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaMoreInfoBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Moreinfo|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaMoreInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaMoreInfo($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaRecommendationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\EntryRecommendations|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaRecommendations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaRecommendations($id), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaUserUpdatesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaUserupdates|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaUserUpdates(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaUserUpdates($id, $queryParameters), $fetch);
    }

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaReviewsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaReviews|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaReviews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaReviews($id, $queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaRelationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaIdRelationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaRelations($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaExternalBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ExternalLinks|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaExternal($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPersonFullByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PeopleIdFullGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPersonFullById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPersonByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PeopleIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPersonById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPersonAnimeBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PersonAnime|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonAnime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPersonAnime($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPersonVoicesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PersonVoiceActingRoles|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonVoices(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPersonVoices($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPersonMangaBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PersonManga|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonManga(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPersonManga($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPersonPicturesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PersonPictures|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPersonPictures($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetProducerByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ProducersIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProducerById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetProducerById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetProducerFullByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ProducersIdFullGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProducerFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetProducerFullById($id), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetProducerExternalBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ExternalLinks|\Psr\Http\Message\ResponseInterface
     */
    public function getProducerExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetProducerExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRandomAnimeBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\RandomAnimeGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRandomAnime(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRandomAnime(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRandomMangaBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\RandomMangaGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRandomManga(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRandomManga(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRandomCharactersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\RandomCharactersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRandomCharacters(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRandomCharacters(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRandomPeopleBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\RandomPeopleGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRandomPeople(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRandomPeople(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRandomUsersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\RandomUsersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRandomUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRandomUsers(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRecentAnimeRecommendationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Recommendations|\Psr\Http\Message\ResponseInterface
     */
    public function getRecentAnimeRecommendations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRecentAnimeRecommendations($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRecentMangaRecommendationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Recommendations|\Psr\Http\Message\ResponseInterface
     */
    public function getRecentMangaRecommendations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRecentMangaRecommendations($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRecentAnimeReviewsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRecentAnimeReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRecentAnimeReviews($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetRecentMangaReviewsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRecentMangaReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetRecentMangaReviews($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var string $filter Filter by day
     *     @var string $kids When supplied, it will filter entries with the `Kids` Genre Demographic. When supplied as `kids=true`, it will return only Kid entries and when supplied as `kids=false`, it will filter out any Kid entries. Defaults to `false`.
     *     @var string $sfw 'Safe For Work'. When supplied, it will filter entries with the `Hentai` Genre. When supplied as `sfw=true`, it will return only SFW entries and when supplied as `sfw=false`, it will filter out any Hentai entries. Defaults to `false`.
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetSchedulesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Schedules|\Psr\Http\Message\ResponseInterface
     */
    public function getSchedules(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetSchedules($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $type
     *     @var float $score
     *     @var float $min_score set a minimum score for results
     *     @var float $max_score Set a maximum score for results
     *     @var string $status
     *     @var string $rating
     *     @var bool $sfw Filter out Adult entries
     *     @var string $genres Filter by genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $genres_exclude Exclude genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     *     @var string $producers Filter by producer(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $start_date Filter by starting date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     *     @var string $end_date Filter by ending date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getAnimeSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetAnimeSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $type
     *     @var float $score
     *     @var float $min_score set a minimum score for results
     *     @var float $max_score Set a maximum score for results
     *     @var string $status
     *     @var bool $sfw Filter out Adult entries
     *     @var string $genres Filter by genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $genres_exclude Exclude genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     *     @var string $magazines Filter by magazine(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $start_date Filter by starting date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     *     @var string $end_date Filter by ending date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetMangaSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getMangaSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetMangaSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetPeopleSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PeopleSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getPeopleSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetPeopleSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetCharactersSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharactersSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getCharactersSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetCharactersSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $gender
     *     @var string $location
     *     @var int $maxAge
     *     @var int $minAge
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUsersSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UsersSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUsersSearch($queryParameters), $fetch);
    }

    /**
     * @param int    $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UsersUserbyidIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $type
     *     @var string $category
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetClubsSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ClubsSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getClubsSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetClubsSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetProducersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Producers|\Psr\Http\Message\ResponseInterface
     */
    public function getProducers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetProducers($queryParameters), $fetch);
    }

    /**
     * @param int    $year
     * @param string $season
     * @param array  $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetSeasonBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getSeason(int $year, string $season, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetSeason($year, $season, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetSeasonNowBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getSeasonNow(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetSeasonNow($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetSeasonsListBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Seasons|\Psr\Http\Message\ResponseInterface
     */
    public function getSeasonsList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetSeasonsList(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetSeasonUpcomingBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getSeasonUpcoming(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetSeasonUpcoming($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $type
     *     @var string $filter
     *     @var int $page
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetTopAnimeBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getTopAnime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetTopAnime($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $type
     *     @var string $filter
     *     @var int $page
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetTopMangaBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\MangaSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getTopManga(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetTopManga($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetTopPeopleBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\PeopleSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getTopPeople(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetTopPeople($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetTopCharactersBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\CharactersSearch|\Psr\Http\Message\ResponseInterface
     */
    public function getTopCharacters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetTopCharacters($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetTopReviewsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\TopReviewsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTopReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetTopReviews($queryParameters), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserFullProfileBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UsersUsernameFullGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserFullProfile(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserFullProfile($username), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserProfileBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UsersUsernameGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserProfile(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserProfile($username), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserStatisticsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserStatistics|\Psr\Http\Message\ResponseInterface
     */
    public function getUserStatistics(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserStatistics($username), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserFavoritesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UsersUsernameFavoritesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserFavorites(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserFavorites($username), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserUpdatesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserUpdates|\Psr\Http\Message\ResponseInterface
     */
    public function getUserUpdates(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserUpdates($username), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserAboutBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserAbout|\Psr\Http\Message\ResponseInterface
     */
    public function getUserAbout(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserAbout($username), $fetch);
    }

    /**
     * @param string $username
     * @param array  $queryParameters {
     *
     *     @var string $type
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserHistoryBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserHistory|\Psr\Http\Message\ResponseInterface
     */
    public function getUserHistory(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserHistory($username, $queryParameters), $fetch);
    }

    /**
     * @param string $username
     * @param array  $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserFriendsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserFriends|\Psr\Http\Message\ResponseInterface
     */
    public function getUserFriends(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserFriends($username, $queryParameters), $fetch);
    }

    /**
     * User Anime lists have been discontinued since May 1st, 2022. <a href='https://docs.google.com/document/d/1-6H-agSnqa8Mfmw802UYfGQrceIEnAaEh4uCXAPiX5A'>Read more</a>.
     *
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserAnimelistBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getUserAnimelist(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserAnimelist($username), $fetch);
    }

    /**
     * User Manga lists have been discontinued since May 1st, 2022. <a href='https://docs.google.com/document/d/1-6H-agSnqa8Mfmw802UYfGQrceIEnAaEh4uCXAPiX5A'>Read more</a>.
     *
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserMangaListBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getUserMangaList(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserMangaList($username), $fetch);
    }

    /**
     * @param string $username
     * @param array  $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserReviewsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UsersUsernameReviewsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserReviews(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserReviews($username, $queryParameters), $fetch);
    }

    /**
     * @param string $username
     * @param array  $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserRecommendationsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Recommendations|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRecommendations(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserRecommendations($username, $queryParameters), $fetch);
    }

    /**
     * @param string $username
     * @param array  $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserClubsBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserClubs|\Psr\Http\Message\ResponseInterface
     */
    public function getUserClubs(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserClubs($username, $queryParameters), $fetch);
    }

    /**
     * @param string $username
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetUserExternalBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ExternalLinks|\Psr\Http\Message\ResponseInterface
     */
    public function getUserExternal(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetUserExternal($username), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetWatchRecentEpisodesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\WatchEpisodes|\Psr\Http\Message\ResponseInterface
     */
    public function getWatchRecentEpisodes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetWatchRecentEpisodes($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetWatchPopularEpisodesBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\WatchEpisodes|\Psr\Http\Message\ResponseInterface
     */
    public function getWatchPopularEpisodes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetWatchPopularEpisodes($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetWatchRecentPromosBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\WatchPromos|\Psr\Http\Message\ResponseInterface
     */
    public function getWatchRecentPromos(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetWatchRecentPromos(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Jikan\JikanPHP\Exception\GetWatchPopularPromosBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\WatchPromos|\Psr\Http\Message\ResponseInterface
     */
    public function getWatchPopularPromos(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jikan\JikanPHP\Endpoint\GetWatchPopularPromos($queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.jikan.moe/v4');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jikan\JikanPHP\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
