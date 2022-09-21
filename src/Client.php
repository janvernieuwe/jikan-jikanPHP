<?php declare(strict_types=1);

namespace Jikan\JikanPHP;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jikan\JikanPHP\Endpoint\GetAnimeById;
use Jikan\JikanPHP\Endpoint\GetAnimeCharacters;
use Jikan\JikanPHP\Endpoint\GetAnimeEpisodeById;
use Jikan\JikanPHP\Endpoint\GetAnimeEpisodes;
use Jikan\JikanPHP\Endpoint\GetAnimeExternal;
use Jikan\JikanPHP\Endpoint\GetAnimeForum;
use Jikan\JikanPHP\Endpoint\GetAnimeFullById;
use Jikan\JikanPHP\Endpoint\GetAnimeGenres;
use Jikan\JikanPHP\Endpoint\GetAnimeMoreInfo;
use Jikan\JikanPHP\Endpoint\GetAnimeNews;
use Jikan\JikanPHP\Endpoint\GetAnimePictures;
use Jikan\JikanPHP\Endpoint\GetAnimeRecommendations;
use Jikan\JikanPHP\Endpoint\GetAnimeRelations;
use Jikan\JikanPHP\Endpoint\GetAnimeReviews;
use Jikan\JikanPHP\Endpoint\GetAnimeSearch;
use Jikan\JikanPHP\Endpoint\GetAnimeStaff;
use Jikan\JikanPHP\Endpoint\GetAnimeStatistics;
use Jikan\JikanPHP\Endpoint\GetAnimeStreaming;
use Jikan\JikanPHP\Endpoint\GetAnimeThemes;
use Jikan\JikanPHP\Endpoint\GetAnimeUserUpdates;
use Jikan\JikanPHP\Endpoint\GetAnimeVideos;
use Jikan\JikanPHP\Endpoint\GetAnimeVideosEpisodes;
use Jikan\JikanPHP\Endpoint\GetCharacterAnime;
use Jikan\JikanPHP\Endpoint\GetCharacterById;
use Jikan\JikanPHP\Endpoint\GetCharacterFullById;
use Jikan\JikanPHP\Endpoint\GetCharacterManga;
use Jikan\JikanPHP\Endpoint\GetCharacterPictures;
use Jikan\JikanPHP\Endpoint\GetCharactersSearch;
use Jikan\JikanPHP\Endpoint\GetCharacterVoiceActors;
use Jikan\JikanPHP\Endpoint\GetClubMembers;
use Jikan\JikanPHP\Endpoint\GetClubRelations;
use Jikan\JikanPHP\Endpoint\GetClubsById;
use Jikan\JikanPHP\Endpoint\GetClubsSearch;
use Jikan\JikanPHP\Endpoint\GetClubStaff;
use Jikan\JikanPHP\Endpoint\GetMagazines;
use Jikan\JikanPHP\Endpoint\GetMangaById;
use Jikan\JikanPHP\Endpoint\GetMangaCharacters;
use Jikan\JikanPHP\Endpoint\GetMangaExternal;
use Jikan\JikanPHP\Endpoint\GetMangaFullById;
use Jikan\JikanPHP\Endpoint\GetMangaGenres;
use Jikan\JikanPHP\Endpoint\GetMangaMoreInfo;
use Jikan\JikanPHP\Endpoint\GetMangaNews;
use Jikan\JikanPHP\Endpoint\GetMangaPictures;
use Jikan\JikanPHP\Endpoint\GetMangaRecommendations;
use Jikan\JikanPHP\Endpoint\GetMangaRelations;
use Jikan\JikanPHP\Endpoint\GetMangaReviews;
use Jikan\JikanPHP\Endpoint\GetMangaSearch;
use Jikan\JikanPHP\Endpoint\GetMangaStatistics;
use Jikan\JikanPHP\Endpoint\GetMangaTopics;
use Jikan\JikanPHP\Endpoint\GetMangaUserUpdates;
use Jikan\JikanPHP\Endpoint\GetPeopleSearch;
use Jikan\JikanPHP\Endpoint\GetPersonAnime;
use Jikan\JikanPHP\Endpoint\GetPersonById;
use Jikan\JikanPHP\Endpoint\GetPersonFullById;
use Jikan\JikanPHP\Endpoint\GetPersonManga;
use Jikan\JikanPHP\Endpoint\GetPersonPictures;
use Jikan\JikanPHP\Endpoint\GetPersonVoices;
use Jikan\JikanPHP\Endpoint\GetProducerById;
use Jikan\JikanPHP\Endpoint\GetProducerExternal;
use Jikan\JikanPHP\Endpoint\GetProducerFullById;
use Jikan\JikanPHP\Endpoint\GetProducers;
use Jikan\JikanPHP\Endpoint\GetRandomAnime;
use Jikan\JikanPHP\Endpoint\GetRandomCharacters;
use Jikan\JikanPHP\Endpoint\GetRandomManga;
use Jikan\JikanPHP\Endpoint\GetRandomPeople;
use Jikan\JikanPHP\Endpoint\GetRandomUsers;
use Jikan\JikanPHP\Endpoint\GetRecentAnimeRecommendations;
use Jikan\JikanPHP\Endpoint\GetRecentAnimeReviews;
use Jikan\JikanPHP\Endpoint\GetRecentMangaRecommendations;
use Jikan\JikanPHP\Endpoint\GetRecentMangaReviews;
use Jikan\JikanPHP\Endpoint\GetSchedules;
use Jikan\JikanPHP\Endpoint\GetSeason;
use Jikan\JikanPHP\Endpoint\GetSeasonNow;
use Jikan\JikanPHP\Endpoint\GetSeasonsList;
use Jikan\JikanPHP\Endpoint\GetSeasonUpcoming;
use Jikan\JikanPHP\Endpoint\GetTopAnime;
use Jikan\JikanPHP\Endpoint\GetTopCharacters;
use Jikan\JikanPHP\Endpoint\GetTopManga;
use Jikan\JikanPHP\Endpoint\GetTopPeople;
use Jikan\JikanPHP\Endpoint\GetTopReviews;
use Jikan\JikanPHP\Endpoint\GetUserAbout;
use Jikan\JikanPHP\Endpoint\GetUserAnimelist;
use Jikan\JikanPHP\Endpoint\GetUserById;
use Jikan\JikanPHP\Endpoint\GetUserClubs;
use Jikan\JikanPHP\Endpoint\GetUserExternal;
use Jikan\JikanPHP\Endpoint\GetUserFavorites;
use Jikan\JikanPHP\Endpoint\GetUserFriends;
use Jikan\JikanPHP\Endpoint\GetUserFullProfile;
use Jikan\JikanPHP\Endpoint\GetUserHistory;
use Jikan\JikanPHP\Endpoint\GetUserMangaList;
use Jikan\JikanPHP\Endpoint\GetUserProfile;
use Jikan\JikanPHP\Endpoint\GetUserRecommendations;
use Jikan\JikanPHP\Endpoint\GetUserReviews;
use Jikan\JikanPHP\Endpoint\GetUsersSearch;
use Jikan\JikanPHP\Endpoint\GetUserStatistics;
use Jikan\JikanPHP\Endpoint\GetUserUpdates;
use Jikan\JikanPHP\Endpoint\GetWatchPopularEpisodes;
use Jikan\JikanPHP\Endpoint\GetWatchPopularPromos;
use Jikan\JikanPHP\Endpoint\GetWatchRecentEpisodes;
use Jikan\JikanPHP\Endpoint\GetWatchRecentPromos;
use Jikan\JikanPHP\Exception\GetAnimeByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeCharactersBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeEpisodeByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeEpisodesBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeExternalBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeForumBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeFullByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeGenresBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeMoreInfoBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeNewsBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimePicturesBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeRecommendationsBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeReviewsBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeSearchBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeStaffBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeStatisticsBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeStreamingBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeThemesBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeUserUpdatesBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeVideosBadRequestException;
use Jikan\JikanPHP\Exception\GetAnimeVideosEpisodesBadRequestException;
use Jikan\JikanPHP\Exception\GetCharacterAnimeBadRequestException;
use Jikan\JikanPHP\Exception\GetCharacterByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetCharacterFullByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetCharacterMangaBadRequestException;
use Jikan\JikanPHP\Exception\GetCharacterPicturesBadRequestException;
use Jikan\JikanPHP\Exception\GetCharactersSearchBadRequestException;
use Jikan\JikanPHP\Exception\GetCharacterVoiceActorsBadRequestException;
use Jikan\JikanPHP\Exception\GetClubMembersBadRequestException;
use Jikan\JikanPHP\Exception\GetClubRelationsBadRequestException;
use Jikan\JikanPHP\Exception\GetClubsByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetClubsSearchBadRequestException;
use Jikan\JikanPHP\Exception\GetClubStaffBadRequestException;
use Jikan\JikanPHP\Exception\GetMagazinesBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaCharactersBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaExternalBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaFullByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaGenresBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaMoreInfoBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaNewsBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaPicturesBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaRecommendationsBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaRelationsBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaReviewsBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaSearchBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaStatisticsBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaTopicsBadRequestException;
use Jikan\JikanPHP\Exception\GetMangaUserUpdatesBadRequestException;
use Jikan\JikanPHP\Exception\GetPeopleSearchBadRequestException;
use Jikan\JikanPHP\Exception\GetPersonAnimeBadRequestException;
use Jikan\JikanPHP\Exception\GetPersonByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetPersonFullByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetPersonMangaBadRequestException;
use Jikan\JikanPHP\Exception\GetPersonPicturesBadRequestException;
use Jikan\JikanPHP\Exception\GetPersonVoicesBadRequestException;
use Jikan\JikanPHP\Exception\GetProducerByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetProducerExternalBadRequestException;
use Jikan\JikanPHP\Exception\GetProducerFullByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetProducersBadRequestException;
use Jikan\JikanPHP\Exception\GetRandomAnimeBadRequestException;
use Jikan\JikanPHP\Exception\GetRandomCharactersBadRequestException;
use Jikan\JikanPHP\Exception\GetRandomMangaBadRequestException;
use Jikan\JikanPHP\Exception\GetRandomPeopleBadRequestException;
use Jikan\JikanPHP\Exception\GetRandomUsersBadRequestException;
use Jikan\JikanPHP\Exception\GetRecentAnimeRecommendationsBadRequestException;
use Jikan\JikanPHP\Exception\GetRecentAnimeReviewsBadRequestException;
use Jikan\JikanPHP\Exception\GetRecentMangaRecommendationsBadRequestException;
use Jikan\JikanPHP\Exception\GetRecentMangaReviewsBadRequestException;
use Jikan\JikanPHP\Exception\GetSchedulesBadRequestException;
use Jikan\JikanPHP\Exception\GetSeasonBadRequestException;
use Jikan\JikanPHP\Exception\GetSeasonNowBadRequestException;
use Jikan\JikanPHP\Exception\GetSeasonsListBadRequestException;
use Jikan\JikanPHP\Exception\GetSeasonUpcomingBadRequestException;
use Jikan\JikanPHP\Exception\GetTopAnimeBadRequestException;
use Jikan\JikanPHP\Exception\GetTopCharactersBadRequestException;
use Jikan\JikanPHP\Exception\GetTopMangaBadRequestException;
use Jikan\JikanPHP\Exception\GetTopPeopleBadRequestException;
use Jikan\JikanPHP\Exception\GetTopReviewsBadRequestException;
use Jikan\JikanPHP\Exception\GetUserAboutBadRequestException;
use Jikan\JikanPHP\Exception\GetUserAnimelistBadRequestException;
use Jikan\JikanPHP\Exception\GetUserByIdBadRequestException;
use Jikan\JikanPHP\Exception\GetUserClubsBadRequestException;
use Jikan\JikanPHP\Exception\GetUserExternalBadRequestException;
use Jikan\JikanPHP\Exception\GetUserFavoritesBadRequestException;
use Jikan\JikanPHP\Exception\GetUserFriendsBadRequestException;
use Jikan\JikanPHP\Exception\GetUserFullProfileBadRequestException;
use Jikan\JikanPHP\Exception\GetUserHistoryBadRequestException;
use Jikan\JikanPHP\Exception\GetUserMangaListBadRequestException;
use Jikan\JikanPHP\Exception\GetUserProfileBadRequestException;
use Jikan\JikanPHP\Exception\GetUserRecommendationsBadRequestException;
use Jikan\JikanPHP\Exception\GetUserReviewsBadRequestException;
use Jikan\JikanPHP\Exception\GetUsersSearchBadRequestException;
use Jikan\JikanPHP\Exception\GetUserStatisticsBadRequestException;
use Jikan\JikanPHP\Exception\GetUserUpdatesBadRequestException;
use Jikan\JikanPHP\Exception\GetWatchPopularEpisodesBadRequestException;
use Jikan\JikanPHP\Exception\GetWatchPopularPromosBadRequestException;
use Jikan\JikanPHP\Exception\GetWatchRecentEpisodesBadRequestException;
use Jikan\JikanPHP\Exception\GetWatchRecentPromosBadRequestException;
use Jikan\JikanPHP\Model\AnimeCharacters;
use Jikan\JikanPHP\Model\AnimeEpisodes;
use Jikan\JikanPHP\Model\AnimeIdEpisodesEpisodeGetResponse200;
use Jikan\JikanPHP\Model\AnimeIdFullGetResponse200;
use Jikan\JikanPHP\Model\AnimeIdGetResponse200;
use Jikan\JikanPHP\Model\AnimeIdRelationsGetResponse200;
use Jikan\JikanPHP\Model\AnimeNews;
use Jikan\JikanPHP\Model\AnimeReviews;
use Jikan\JikanPHP\Model\AnimeSearch;
use Jikan\JikanPHP\Model\AnimeStaff;
use Jikan\JikanPHP\Model\AnimeStatistics;
use Jikan\JikanPHP\Model\AnimeThemes;
use Jikan\JikanPHP\Model\AnimeUserupdates;
use Jikan\JikanPHP\Model\AnimeVideos;
use Jikan\JikanPHP\Model\AnimeVideosEpisodes;
use Jikan\JikanPHP\Model\CharacterAnime;
use Jikan\JikanPHP\Model\CharacterManga;
use Jikan\JikanPHP\Model\CharacterPictures;
use Jikan\JikanPHP\Model\CharactersIdFullGetResponse200;
use Jikan\JikanPHP\Model\CharactersIdGetResponse200;
use Jikan\JikanPHP\Model\CharactersSearch;
use Jikan\JikanPHP\Model\CharacterVoiceActors;
use Jikan\JikanPHP\Model\ClubRelations;
use Jikan\JikanPHP\Model\ClubsIdGetResponse200;
use Jikan\JikanPHP\Model\ClubsIdMembersGetResponse200;
use Jikan\JikanPHP\Model\ClubsSearch;
use Jikan\JikanPHP\Model\ClubStaff;
use Jikan\JikanPHP\Model\EntryRecommendations;
use Jikan\JikanPHP\Model\ExternalLinks;
use Jikan\JikanPHP\Model\Forum;
use Jikan\JikanPHP\Model\Genres;
use Jikan\JikanPHP\Model\Magazines;
use Jikan\JikanPHP\Model\MangaCharacters;
use Jikan\JikanPHP\Model\MangaIdFullGetResponse200;
use Jikan\JikanPHP\Model\MangaIdGetResponse200;
use Jikan\JikanPHP\Model\MangaIdRelationsGetResponse200;
use Jikan\JikanPHP\Model\MangaNews;
use Jikan\JikanPHP\Model\MangaPictures;
use Jikan\JikanPHP\Model\MangaReviews;
use Jikan\JikanPHP\Model\MangaSearch;
use Jikan\JikanPHP\Model\MangaStatistics;
use Jikan\JikanPHP\Model\MangaUserupdates;
use Jikan\JikanPHP\Model\Moreinfo;
use Jikan\JikanPHP\Model\PeopleIdFullGetResponse200;
use Jikan\JikanPHP\Model\PeopleIdGetResponse200;
use Jikan\JikanPHP\Model\PeopleSearch;
use Jikan\JikanPHP\Model\PersonAnime;
use Jikan\JikanPHP\Model\PersonManga;
use Jikan\JikanPHP\Model\PersonPictures;
use Jikan\JikanPHP\Model\PersonVoiceActingRoles;
use Jikan\JikanPHP\Model\PicturesVariants;
use Jikan\JikanPHP\Model\Producers;
use Jikan\JikanPHP\Model\ProducersIdFullGetResponse200;
use Jikan\JikanPHP\Model\ProducersIdGetResponse200;
use Jikan\JikanPHP\Model\RandomAnimeGetResponse200;
use Jikan\JikanPHP\Model\RandomCharactersGetResponse200;
use Jikan\JikanPHP\Model\RandomMangaGetResponse200;
use Jikan\JikanPHP\Model\RandomPeopleGetResponse200;
use Jikan\JikanPHP\Model\RandomUsersGetResponse200;
use Jikan\JikanPHP\Model\Recommendations;
use Jikan\JikanPHP\Model\Schedules;
use Jikan\JikanPHP\Model\Seasons;
use Jikan\JikanPHP\Model\TopReviewsGetResponse200;
use Jikan\JikanPHP\Model\UserAbout;
use Jikan\JikanPHP\Model\UserClubs;
use Jikan\JikanPHP\Model\UserFriends;
use Jikan\JikanPHP\Model\UserHistory;
use Jikan\JikanPHP\Model\UsersSearch;
use Jikan\JikanPHP\Model\UserStatistics;
use Jikan\JikanPHP\Model\UsersUserbyidIdGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameFavoritesGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameFullGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameReviewsGetResponse200;
use Jikan\JikanPHP\Model\UserUpdates;
use Jikan\JikanPHP\Model\WatchEpisodes;
use Jikan\JikanPHP\Model\WatchPromos;
use Jikan\JikanPHP\Normalizer\JaneObjectNormalizer;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends \Jikan\JikanPHP\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeFullByIdBadRequestException
     *
     * @return null|AnimeIdFullGetResponse200|ResponseInterface
     */
    public function getAnimeFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeByIdBadRequestException
     *
     * @return null|AnimeIdGetResponse200|ResponseInterface
     */
    public function getAnimeById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeCharactersBadRequestException
     *
     * @return null|AnimeCharacters|ResponseInterface
     */
    public function getAnimeCharacters(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeCharacters($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeStaffBadRequestException
     *
     * @return null|AnimeStaff|ResponseInterface
     */
    public function getAnimeStaff(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeStaff($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeEpisodesBadRequestException
     *
     * @return null|AnimeEpisodes|ResponseInterface
     */
    public function getAnimeEpisodes(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeEpisodes($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeEpisodeByIdBadRequestException
     *
     * @return null|AnimeIdEpisodesEpisodeGetResponse200|ResponseInterface
     */
    public function getAnimeEpisodeById(int $id, int $episode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeEpisodeById($id, $episode), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeNewsBadRequestException
     *
     * @return null|AnimeNews|ResponseInterface
     */
    public function getAnimeNews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeNews($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter Filter topics
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeForumBadRequestException
     *
     * @return null|Forum|ResponseInterface
     */
    public function getAnimeForum(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeForum($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeVideosBadRequestException
     *
     * @return null|AnimeVideos|ResponseInterface
     */
    public function getAnimeVideos(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeVideos($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeVideosEpisodesBadRequestException
     *
     * @return null|AnimeVideosEpisodes|ResponseInterface
     */
    public function getAnimeVideosEpisodes(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeVideosEpisodes($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimePicturesBadRequestException
     *
     * @return null|PicturesVariants|ResponseInterface
     */
    public function getAnimePictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimePictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeStatisticsBadRequestException
     *
     * @return null|AnimeStatistics|ResponseInterface
     */
    public function getAnimeStatistics(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeStatistics($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeMoreInfoBadRequestException
     *
     * @return null|Moreinfo|ResponseInterface
     */
    public function getAnimeMoreInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeMoreInfo($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeRecommendationsBadRequestException
     *
     * @return null|EntryRecommendations|ResponseInterface
     */
    public function getAnimeRecommendations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeRecommendations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeUserUpdatesBadRequestException
     *
     * @return null|AnimeUserupdates|ResponseInterface
     */
    public function getAnimeUserUpdates(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeUserUpdates($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeReviewsBadRequestException
     *
     * @return null|AnimeReviews|ResponseInterface
     */
    public function getAnimeReviews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeReviews($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AnimeIdRelationsGetResponse200|ResponseInterface
     */
    public function getAnimeRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeRelations($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeThemesBadRequestException
     *
     * @return null|AnimeThemes|ResponseInterface
     */
    public function getAnimeThemes(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeThemes($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeExternalBadRequestException
     *
     * @return null|ExternalLinks|ResponseInterface
     */
    public function getAnimeExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeStreamingBadRequestException
     *
     * @return null|ExternalLinks|ResponseInterface
     */
    public function getAnimeStreaming(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeStreaming($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetCharacterFullByIdBadRequestException
     *
     * @return null|CharactersIdFullGetResponse200|ResponseInterface
     */
    public function getCharacterFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetCharacterByIdBadRequestException
     *
     * @return null|CharactersIdGetResponse200|ResponseInterface
     */
    public function getCharacterById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetCharacterAnimeBadRequestException
     *
     * @return null|CharacterAnime|ResponseInterface
     */
    public function getCharacterAnime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterAnime($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetCharacterMangaBadRequestException
     *
     * @return null|CharacterManga|ResponseInterface
     */
    public function getCharacterManga(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterManga($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetCharacterVoiceActorsBadRequestException
     *
     * @return null|CharacterVoiceActors|ResponseInterface
     */
    public function getCharacterVoiceActors(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterVoiceActors($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetCharacterPicturesBadRequestException
     *
     * @return null|CharacterPictures|ResponseInterface
     */
    public function getCharacterPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterPictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetClubsByIdBadRequestException
     *
     * @return null|ClubsIdGetResponse200|ResponseInterface
     */
    public function getClubsById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubsById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetClubMembersBadRequestException
     *
     * @return null|ClubsIdMembersGetResponse200|ResponseInterface
     */
    public function getClubMembers(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubMembers($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetClubStaffBadRequestException
     *
     * @return null|ClubStaff|ResponseInterface
     */
    public function getClubStaff(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubStaff($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetClubRelationsBadRequestException
     *
     * @return null|ClubRelations|ResponseInterface
     */
    public function getClubRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubRelations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetAnimeGenresBadRequestException
     *
     * @return null|Genres|ResponseInterface
     */
    public function getAnimeGenres(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeGenres($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaGenresBadRequestException
     *
     * @return null|Genres|ResponseInterface
     */
    public function getMangaGenres(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaGenres($queryParameters), $fetch);
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
     * @throws GetMagazinesBadRequestException
     *
     * @return null|Magazines|ResponseInterface
     */
    public function getMagazines(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMagazines($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaFullByIdBadRequestException
     *
     * @return null|MangaIdFullGetResponse200|ResponseInterface
     */
    public function getMangaFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaByIdBadRequestException
     *
     * @return null|MangaIdGetResponse200|ResponseInterface
     */
    public function getMangaById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaCharactersBadRequestException
     *
     * @return null|MangaCharacters|ResponseInterface
     */
    public function getMangaCharacters(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaCharacters($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaNewsBadRequestException
     *
     * @return null|MangaNews|ResponseInterface
     */
    public function getMangaNews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaNews($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter Filter topics
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaTopicsBadRequestException
     *
     * @return null|Forum|ResponseInterface
     */
    public function getMangaTopics(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaTopics($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaPicturesBadRequestException
     *
     * @return null|MangaPictures|ResponseInterface
     */
    public function getMangaPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaPictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaStatisticsBadRequestException
     *
     * @return null|MangaStatistics|ResponseInterface
     */
    public function getMangaStatistics(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaStatistics($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaMoreInfoBadRequestException
     *
     * @return null|Moreinfo|ResponseInterface
     */
    public function getMangaMoreInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaMoreInfo($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaRecommendationsBadRequestException
     *
     * @return null|EntryRecommendations|ResponseInterface
     */
    public function getMangaRecommendations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaRecommendations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaUserUpdatesBadRequestException
     *
     * @return null|MangaUserupdates|ResponseInterface
     */
    public function getMangaUserUpdates(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaUserUpdates($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaReviewsBadRequestException
     *
     * @return null|MangaReviews|ResponseInterface
     */
    public function getMangaReviews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaReviews($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaRelationsBadRequestException
     *
     * @return null|MangaIdRelationsGetResponse200|ResponseInterface
     */
    public function getMangaRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaRelations($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetMangaExternalBadRequestException
     *
     * @return null|ExternalLinks|ResponseInterface
     */
    public function getMangaExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetPersonFullByIdBadRequestException
     *
     * @return null|PeopleIdFullGetResponse200|ResponseInterface
     */
    public function getPersonFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetPersonByIdBadRequestException
     *
     * @return null|PeopleIdGetResponse200|ResponseInterface
     */
    public function getPersonById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetPersonAnimeBadRequestException
     *
     * @return null|PersonAnime|ResponseInterface
     */
    public function getPersonAnime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonAnime($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetPersonVoicesBadRequestException
     *
     * @return null|PersonVoiceActingRoles|ResponseInterface
     */
    public function getPersonVoices(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonVoices($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetPersonMangaBadRequestException
     *
     * @return null|PersonManga|ResponseInterface
     */
    public function getPersonManga(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonManga($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetPersonPicturesBadRequestException
     *
     * @return null|PersonPictures|ResponseInterface
     */
    public function getPersonPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonPictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetProducerByIdBadRequestException
     *
     * @return null|ProducersIdGetResponse200|ResponseInterface
     */
    public function getProducerById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducerById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetProducerFullByIdBadRequestException
     *
     * @return null|ProducersIdFullGetResponse200|ResponseInterface
     */
    public function getProducerFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducerFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetProducerExternalBadRequestException
     *
     * @return null|ExternalLinks|ResponseInterface
     */
    public function getProducerExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducerExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRandomAnimeBadRequestException
     *
     * @return null|RandomAnimeGetResponse200|ResponseInterface
     */
    public function getRandomAnime(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomAnime(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRandomMangaBadRequestException
     *
     * @return null|RandomMangaGetResponse200|ResponseInterface
     */
    public function getRandomManga(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomManga(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRandomCharactersBadRequestException
     *
     * @return null|RandomCharactersGetResponse200|ResponseInterface
     */
    public function getRandomCharacters(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomCharacters(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRandomPeopleBadRequestException
     *
     * @return null|RandomPeopleGetResponse200|ResponseInterface
     */
    public function getRandomPeople(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomPeople(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRandomUsersBadRequestException
     *
     * @return null|RandomUsersGetResponse200|ResponseInterface
     */
    public function getRandomUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomUsers(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRecentAnimeRecommendationsBadRequestException
     *
     * @return null|Recommendations|ResponseInterface
     */
    public function getRecentAnimeRecommendations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRecentAnimeRecommendations($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRecentMangaRecommendationsBadRequestException
     *
     * @return null|Recommendations|ResponseInterface
     */
    public function getRecentMangaRecommendations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRecentMangaRecommendations($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRecentAnimeReviewsBadRequestException
     *
     * @return null|ResponseInterface
     */
    public function getRecentAnimeReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRecentAnimeReviews($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetRecentMangaReviewsBadRequestException
     *
     * @return null|ResponseInterface
     */
    public function getRecentMangaReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRecentMangaReviews($queryParameters), $fetch);
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
     * @throws GetSchedulesBadRequestException
     *
     * @return null|Schedules|ResponseInterface
     */
    public function getSchedules(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSchedules($queryParameters), $fetch);
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
     * @throws GetAnimeSearchBadRequestException
     *
     * @return null|AnimeSearch|ResponseInterface
     */
    public function getAnimeSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeSearch($queryParameters), $fetch);
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
     * @throws GetMangaSearchBadRequestException
     *
     * @return null|MangaSearch|ResponseInterface
     */
    public function getMangaSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaSearch($queryParameters), $fetch);
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
     * @throws GetPeopleSearchBadRequestException
     *
     * @return null|PeopleSearch|ResponseInterface
     */
    public function getPeopleSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPeopleSearch($queryParameters), $fetch);
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
     * @throws GetCharactersSearchBadRequestException
     *
     * @return null|CharactersSearch|ResponseInterface
     */
    public function getCharactersSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharactersSearch($queryParameters), $fetch);
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
     * @throws GetUsersSearchBadRequestException
     *
     * @return null|UsersSearch|ResponseInterface
     */
    public function getUsersSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersSearch($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserByIdBadRequestException
     *
     * @return null|UsersUserbyidIdGetResponse200|ResponseInterface
     */
    public function getUserById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserById($id), $fetch);
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
     * @throws GetClubsSearchBadRequestException
     *
     * @return null|ClubsSearch|ResponseInterface
     */
    public function getClubsSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubsSearch($queryParameters), $fetch);
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
     * @throws GetProducersBadRequestException
     *
     * @return null|Producers|ResponseInterface
     */
    public function getProducers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducers($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetSeasonBadRequestException
     *
     * @return null|AnimeSearch|ResponseInterface
     */
    public function getSeason(int $year, string $season, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeason($year, $season, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetSeasonNowBadRequestException
     *
     * @return null|AnimeSearch|ResponseInterface
     */
    public function getSeasonNow(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeasonNow($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetSeasonsListBadRequestException
     *
     * @return null|Seasons|ResponseInterface
     */
    public function getSeasonsList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeasonsList(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetSeasonUpcomingBadRequestException
     *
     * @return null|AnimeSearch|ResponseInterface
     */
    public function getSeasonUpcoming(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeasonUpcoming($queryParameters), $fetch);
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
     * @throws GetTopAnimeBadRequestException
     *
     * @return null|AnimeSearch|ResponseInterface
     */
    public function getTopAnime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopAnime($queryParameters), $fetch);
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
     * @throws GetTopMangaBadRequestException
     *
     * @return null|MangaSearch|ResponseInterface
     */
    public function getTopManga(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopManga($queryParameters), $fetch);
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
     * @throws GetTopPeopleBadRequestException
     *
     * @return null|PeopleSearch|ResponseInterface
     */
    public function getTopPeople(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopPeople($queryParameters), $fetch);
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
     * @throws GetTopCharactersBadRequestException
     *
     * @return null|CharactersSearch|ResponseInterface
     */
    public function getTopCharacters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopCharacters($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetTopReviewsBadRequestException
     *
     * @return null|TopReviewsGetResponse200|ResponseInterface
     */
    public function getTopReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopReviews($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserFullProfileBadRequestException
     *
     * @return null|UsersUsernameFullGetResponse200|ResponseInterface
     */
    public function getUserFullProfile(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserFullProfile($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserProfileBadRequestException
     *
     * @return null|UsersUsernameGetResponse200|ResponseInterface
     */
    public function getUserProfile(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserProfile($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserStatisticsBadRequestException
     *
     * @return null|UserStatistics|ResponseInterface
     */
    public function getUserStatistics(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserStatistics($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserFavoritesBadRequestException
     *
     * @return null|UsersUsernameFavoritesGetResponse200|ResponseInterface
     */
    public function getUserFavorites(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserFavorites($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserUpdatesBadRequestException
     *
     * @return null|UserUpdates|ResponseInterface
     */
    public function getUserUpdates(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserUpdates($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserAboutBadRequestException
     *
     * @return null|UserAbout|ResponseInterface
     */
    public function getUserAbout(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserAbout($username), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $type
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserHistoryBadRequestException
     *
     * @return null|UserHistory|ResponseInterface
     */
    public function getUserHistory(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserHistory($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserFriendsBadRequestException
     *
     * @return null|UserFriends|ResponseInterface
     */
    public function getUserFriends(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserFriends($username, $queryParameters), $fetch);
    }

    /**
     * User Anime lists have been discontinued since May 1st, 2022. <a href='https://docs.google.com/document/d/1-6H-agSnqa8Mfmw802UYfGQrceIEnAaEh4uCXAPiX5A'>Read more</a>.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserAnimelistBadRequestException
     *
     * @return null|ResponseInterface
     */
    public function getUserAnimelist(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserAnimelist($username), $fetch);
    }

    /**
     * User Manga lists have been discontinued since May 1st, 2022. <a href='https://docs.google.com/document/d/1-6H-agSnqa8Mfmw802UYfGQrceIEnAaEh4uCXAPiX5A'>Read more</a>.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserMangaListBadRequestException
     *
     * @return null|ResponseInterface
     */
    public function getUserMangaList(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserMangaList($username), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserReviewsBadRequestException
     *
     * @return null|UsersUsernameReviewsGetResponse200|ResponseInterface
     */
    public function getUserReviews(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserReviews($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserRecommendationsBadRequestException
     *
     * @return null|Recommendations|ResponseInterface
     */
    public function getUserRecommendations(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserRecommendations($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserClubsBadRequestException
     *
     * @return null|UserClubs|ResponseInterface
     */
    public function getUserClubs(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserClubs($username, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetUserExternalBadRequestException
     *
     * @return null|ExternalLinks|ResponseInterface
     */
    public function getUserExternal(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserExternal($username), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetWatchRecentEpisodesBadRequestException
     *
     * @return null|WatchEpisodes|ResponseInterface
     */
    public function getWatchRecentEpisodes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchRecentEpisodes($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetWatchPopularEpisodesBadRequestException
     *
     * @return null|WatchEpisodes|ResponseInterface
     */
    public function getWatchPopularEpisodes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchPopularEpisodes($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetWatchRecentPromosBadRequestException
     *
     * @return null|WatchPromos|ResponseInterface
     */
    public function getWatchRecentPromos(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchRecentPromos(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws GetWatchPopularPromosBadRequestException
     *
     * @return null|WatchPromos|ResponseInterface
     */
    public function getWatchPopularPromos(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchPopularPromos($queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = []): static
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.jikan.moe/v4');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if ([] !== $additionalPlugins) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }

            $httpClient = new PluginClient($httpClient, $plugins);
        }

        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new ArrayDenormalizer(), new JaneObjectNormalizer()];
        if ([] !== $additionalNormalizers) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }

        $serializer = new Serializer($normalizers, [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
