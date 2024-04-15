<?php declare(strict_types=1);

namespace Jikan\JikanPHP;

use Psr\Http\Message\ResponseInterface;
use Jikan\JikanPHP\Endpoint\GetAnimeFullById;
use Jikan\JikanPHP\Endpoint\GetAnimeById;
use Jikan\JikanPHP\Endpoint\GetAnimeCharacters;
use Jikan\JikanPHP\Endpoint\GetAnimeStaff;
use Jikan\JikanPHP\Endpoint\GetAnimeEpisodes;
use Jikan\JikanPHP\Endpoint\GetAnimeEpisodeById;
use Jikan\JikanPHP\Endpoint\GetAnimeNews;
use Jikan\JikanPHP\Endpoint\GetAnimeForum;
use Jikan\JikanPHP\Endpoint\GetAnimeVideos;
use Jikan\JikanPHP\Endpoint\GetAnimeVideosEpisodes;
use Jikan\JikanPHP\Endpoint\GetAnimePictures;
use Jikan\JikanPHP\Endpoint\GetAnimeStatistics;
use Jikan\JikanPHP\Endpoint\GetAnimeMoreInfo;
use Jikan\JikanPHP\Endpoint\GetAnimeRecommendations;
use Jikan\JikanPHP\Endpoint\GetAnimeUserUpdates;
use Jikan\JikanPHP\Endpoint\GetAnimeReviews;
use Jikan\JikanPHP\Endpoint\GetAnimeRelations;
use Jikan\JikanPHP\Endpoint\GetAnimeThemes;
use Jikan\JikanPHP\Endpoint\GetAnimeExternal;
use Jikan\JikanPHP\Endpoint\GetAnimeStreaming;
use Jikan\JikanPHP\Endpoint\GetCharacterFullById;
use Jikan\JikanPHP\Endpoint\GetCharacterById;
use Jikan\JikanPHP\Endpoint\GetCharacterAnime;
use Jikan\JikanPHP\Endpoint\GetCharacterManga;
use Jikan\JikanPHP\Endpoint\GetCharacterVoiceActors;
use Jikan\JikanPHP\Endpoint\GetCharacterPictures;
use Jikan\JikanPHP\Endpoint\GetClubsById;
use Jikan\JikanPHP\Endpoint\GetClubMembers;
use Jikan\JikanPHP\Endpoint\GetClubStaff;
use Jikan\JikanPHP\Endpoint\GetClubRelations;
use Jikan\JikanPHP\Endpoint\GetAnimeGenres;
use Jikan\JikanPHP\Endpoint\GetMangaGenres;
use Jikan\JikanPHP\Endpoint\GetMagazines;
use Jikan\JikanPHP\Endpoint\GetMangaFullById;
use Jikan\JikanPHP\Endpoint\GetMangaById;
use Jikan\JikanPHP\Endpoint\GetMangaCharacters;
use Jikan\JikanPHP\Endpoint\GetMangaNews;
use Jikan\JikanPHP\Endpoint\GetMangaTopics;
use Jikan\JikanPHP\Endpoint\GetMangaPictures;
use Jikan\JikanPHP\Endpoint\GetMangaStatistics;
use Jikan\JikanPHP\Endpoint\GetMangaMoreInfo;
use Jikan\JikanPHP\Endpoint\GetMangaRecommendations;
use Jikan\JikanPHP\Endpoint\GetMangaUserUpdates;
use Jikan\JikanPHP\Endpoint\GetMangaReviews;
use Jikan\JikanPHP\Endpoint\GetMangaRelations;
use Jikan\JikanPHP\Endpoint\GetMangaExternal;
use Jikan\JikanPHP\Endpoint\GetPersonFullById;
use Jikan\JikanPHP\Endpoint\GetPersonById;
use Jikan\JikanPHP\Endpoint\GetPersonAnime;
use Jikan\JikanPHP\Endpoint\GetPersonVoices;
use Jikan\JikanPHP\Endpoint\GetPersonManga;
use Jikan\JikanPHP\Endpoint\GetPersonPictures;
use Jikan\JikanPHP\Endpoint\GetProducerById;
use Jikan\JikanPHP\Endpoint\GetProducerFullById;
use Jikan\JikanPHP\Endpoint\GetProducerExternal;
use Jikan\JikanPHP\Endpoint\GetRandomAnime;
use Jikan\JikanPHP\Endpoint\GetRandomManga;
use Jikan\JikanPHP\Endpoint\GetRandomCharacters;
use Jikan\JikanPHP\Endpoint\GetRandomPeople;
use Jikan\JikanPHP\Endpoint\GetRandomUsers;
use Jikan\JikanPHP\Endpoint\GetRecentAnimeRecommendations;
use Jikan\JikanPHP\Endpoint\GetRecentMangaRecommendations;
use Jikan\JikanPHP\Endpoint\GetRecentAnimeReviews;
use Jikan\JikanPHP\Endpoint\GetRecentMangaReviews;
use Jikan\JikanPHP\Endpoint\GetSchedules;
use Jikan\JikanPHP\Endpoint\GetAnimeSearch;
use Jikan\JikanPHP\Endpoint\GetMangaSearch;
use Jikan\JikanPHP\Endpoint\GetPeopleSearch;
use Jikan\JikanPHP\Endpoint\GetCharactersSearch;
use Jikan\JikanPHP\Endpoint\GetUsersSearch;
use Jikan\JikanPHP\Endpoint\GetUserById;
use Jikan\JikanPHP\Endpoint\GetClubsSearch;
use Jikan\JikanPHP\Endpoint\GetProducers;
use Jikan\JikanPHP\Endpoint\GetSeasonNow;
use Jikan\JikanPHP\Endpoint\GetSeason;
use Jikan\JikanPHP\Endpoint\GetSeasonsList;
use Jikan\JikanPHP\Endpoint\GetSeasonUpcoming;
use Jikan\JikanPHP\Endpoint\GetTopAnime;
use Jikan\JikanPHP\Endpoint\GetTopManga;
use Jikan\JikanPHP\Endpoint\GetTopPeople;
use Jikan\JikanPHP\Endpoint\GetTopCharacters;
use Jikan\JikanPHP\Endpoint\GetTopReviews;
use Jikan\JikanPHP\Endpoint\GetUserFullProfile;
use Jikan\JikanPHP\Endpoint\GetUserProfile;
use Jikan\JikanPHP\Endpoint\GetUserStatistics;
use Jikan\JikanPHP\Endpoint\GetUserFavorites;
use Jikan\JikanPHP\Endpoint\GetUserUpdates;
use Jikan\JikanPHP\Endpoint\GetUserAbout;
use Jikan\JikanPHP\Endpoint\GetUserHistory;
use Jikan\JikanPHP\Endpoint\GetUserFriends;
use Jikan\JikanPHP\Endpoint\GetUserAnimelist;
use Jikan\JikanPHP\Endpoint\GetUserMangaList;
use Jikan\JikanPHP\Endpoint\GetUserReviews;
use Jikan\JikanPHP\Endpoint\GetUserRecommendations;
use Jikan\JikanPHP\Endpoint\GetUserClubs;
use Jikan\JikanPHP\Endpoint\GetUserExternal;
use Jikan\JikanPHP\Endpoint\GetWatchRecentEpisodes;
use Jikan\JikanPHP\Endpoint\GetWatchPopularEpisodes;
use Jikan\JikanPHP\Endpoint\GetWatchRecentPromos;
use Jikan\JikanPHP\Endpoint\GetWatchPopularPromos;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Jikan\JikanPHP\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonDecode;
class Client extends Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeFullByIdBadRequestException
     *
     * @return null|Model\AnimeIdFullGetResponse200|ResponseInterface
     */
    public function getAnimeFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeByIdBadRequestException
     *
     * @return null|Model\AnimeIdGetResponse200|ResponseInterface
     */
    public function getAnimeById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeCharactersBadRequestException
     *
     * @return null|Model\AnimeCharacters|ResponseInterface
     */
    public function getAnimeCharacters(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeCharacters($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeStaffBadRequestException
     *
     * @return null|Model\AnimeStaff|ResponseInterface
     */
    public function getAnimeStaff(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeStaff($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeEpisodesBadRequestException
     *
     * @return null|Model\AnimeEpisodes|ResponseInterface
     */
    public function getAnimeEpisodes(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeEpisodes($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeEpisodeByIdBadRequestException
     *
     * @return null|Model\AnimeIdEpisodesEpisodeGetResponse200|ResponseInterface
     */
    public function getAnimeEpisodeById(int $id, int $episode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeEpisodeById($id, $episode), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeNewsBadRequestException
     *
     * @return null|Model\AnimeNews|ResponseInterface
     */
    public function getAnimeNews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeNews($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter Filter topics
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeForumBadRequestException
     *
     * @return null|Model\Forum|ResponseInterface
     */
    public function getAnimeForum(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeForum($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeVideosBadRequestException
     *
     * @return null|Model\AnimeVideos|ResponseInterface
     */
    public function getAnimeVideos(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeVideos($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeVideosEpisodesBadRequestException
     *
     * @return null|Model\AnimeVideosEpisodes|ResponseInterface
     */
    public function getAnimeVideosEpisodes(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeVideosEpisodes($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimePicturesBadRequestException
     *
     * @return null|Model\PicturesVariants|ResponseInterface
     */
    public function getAnimePictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimePictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeStatisticsBadRequestException
     *
     * @return null|Model\AnimeStatistics|ResponseInterface
     */
    public function getAnimeStatistics(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeStatistics($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeMoreInfoBadRequestException
     *
     * @return null|Model\Moreinfo|ResponseInterface
     */
    public function getAnimeMoreInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeMoreInfo($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeRecommendationsBadRequestException
     *
     * @return null|Model\EntryRecommendations|ResponseInterface
     */
    public function getAnimeRecommendations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeRecommendations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeUserUpdatesBadRequestException
     *
     * @return null|Model\AnimeUserupdates|ResponseInterface
     */
    public function getAnimeUserUpdates(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeUserUpdates($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int  $page
     * @var bool $preliminary Any reviews left during an ongoing anime/manga, those reviews are tagged as preliminary. NOTE: Preliminary reviews are not returned by default so if the entry is airing/publishing you need to add this otherwise you will get an empty list. e.g usage: `?preliminary=true`
     * @var bool $spoiler Any reviews that are tagged as a spoiler. Spoiler reviews are not returned by default. e.g usage: `?spoiler=true`
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeReviewsBadRequestException
     *
     * @return null|Model\AnimeReviews|ResponseInterface
     */
    public function getAnimeReviews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeReviews($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\AnimeIdRelationsGetResponse200|ResponseInterface
     */
    public function getAnimeRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeRelations($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeThemesBadRequestException
     *
     * @return null|Model\AnimeThemes|ResponseInterface
     */
    public function getAnimeThemes(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeThemes($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeExternalBadRequestException
     *
     * @return null|Model\ExternalLinks|ResponseInterface
     */
    public function getAnimeExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeStreamingBadRequestException
     *
     * @return null|Model\ExternalLinks|ResponseInterface
     */
    public function getAnimeStreaming(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeStreaming($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharacterFullByIdBadRequestException
     *
     * @return null|Model\CharactersIdFullGetResponse200|ResponseInterface
     */
    public function getCharacterFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharacterByIdBadRequestException
     *
     * @return null|Model\CharactersIdGetResponse200|ResponseInterface
     */
    public function getCharacterById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharacterAnimeBadRequestException
     *
     * @return null|Model\CharacterAnime|ResponseInterface
     */
    public function getCharacterAnime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterAnime($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharacterMangaBadRequestException
     *
     * @return null|Model\CharacterManga|ResponseInterface
     */
    public function getCharacterManga(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterManga($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharacterVoiceActorsBadRequestException
     *
     * @return null|Model\CharacterVoiceActors|ResponseInterface
     */
    public function getCharacterVoiceActors(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterVoiceActors($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharacterPicturesBadRequestException
     *
     * @return null|Model\CharacterPictures|ResponseInterface
     */
    public function getCharacterPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharacterPictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetClubsByIdBadRequestException
     *
     * @return null|Model\ClubsIdGetResponse200|ResponseInterface
     */
    public function getClubsById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubsById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetClubMembersBadRequestException
     *
     * @return null|Model\ClubsIdMembersGetResponse200|ResponseInterface
     */
    public function getClubMembers(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubMembers($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetClubStaffBadRequestException
     *
     * @return null|Model\ClubStaff|ResponseInterface
     */
    public function getClubStaff(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubStaff($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetClubRelationsBadRequestException
     *
     * @return null|Model\ClubRelations|ResponseInterface
     */
    public function getClubRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubRelations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeGenresBadRequestException
     *
     * @return null|Model\Genres|ResponseInterface
     */
    public function getAnimeGenres(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeGenres($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaGenresBadRequestException
     *
     * @return null|Model\Genres|ResponseInterface
     */
    public function getMangaGenres(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaGenres($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMagazinesBadRequestException
     *
     * @return null|Model\Magazines|ResponseInterface
     */
    public function getMagazines(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMagazines($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaFullByIdBadRequestException
     *
     * @return null|Model\MangaIdFullGetResponse200|ResponseInterface
     */
    public function getMangaFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaByIdBadRequestException
     *
     * @return null|Model\MangaIdGetResponse200|ResponseInterface
     */
    public function getMangaById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaCharactersBadRequestException
     *
     * @return null|Model\MangaCharacters|ResponseInterface
     */
    public function getMangaCharacters(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaCharacters($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaNewsBadRequestException
     *
     * @return null|Model\MangaNews|ResponseInterface
     */
    public function getMangaNews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaNews($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter Filter topics
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaTopicsBadRequestException
     *
     * @return null|Model\Forum|ResponseInterface
     */
    public function getMangaTopics(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaTopics($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaPicturesBadRequestException
     *
     * @return null|Model\MangaPictures|ResponseInterface
     */
    public function getMangaPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaPictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaStatisticsBadRequestException
     *
     * @return null|Model\MangaStatistics|ResponseInterface
     */
    public function getMangaStatistics(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaStatistics($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaMoreInfoBadRequestException
     *
     * @return null|Model\Moreinfo|ResponseInterface
     */
    public function getMangaMoreInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaMoreInfo($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaRecommendationsBadRequestException
     *
     * @return null|Model\EntryRecommendations|ResponseInterface
     */
    public function getMangaRecommendations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaRecommendations($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaUserUpdatesBadRequestException
     *
     * @return null|Model\MangaUserupdates|ResponseInterface
     */
    public function getMangaUserUpdates(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaUserUpdates($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int  $page
     * @var bool $preliminary Any reviews left during an ongoing anime/manga, those reviews are tagged as preliminary. NOTE: Preliminary reviews are not returned by default so if the entry is airing/publishing you need to add this otherwise you will get an empty list. e.g usage: `?preliminary=true`
     * @var bool $spoiler Any reviews that are tagged as a spoiler. Spoiler reviews are not returned by default. e.g usage: `?spoiler=true`
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaReviewsBadRequestException
     *
     * @return null|Model\MangaReviews|ResponseInterface
     */
    public function getMangaReviews(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaReviews($id, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaRelationsBadRequestException
     *
     * @return null|Model\MangaIdRelationsGetResponse200|ResponseInterface
     */
    public function getMangaRelations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaRelations($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaExternalBadRequestException
     *
     * @return null|Model\ExternalLinks|ResponseInterface
     */
    public function getMangaExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPersonFullByIdBadRequestException
     *
     * @return null|Model\PeopleIdFullGetResponse200|ResponseInterface
     */
    public function getPersonFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPersonByIdBadRequestException
     *
     * @return null|Model\PeopleIdGetResponse200|ResponseInterface
     */
    public function getPersonById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPersonAnimeBadRequestException
     *
     * @return null|Model\PersonAnime|ResponseInterface
     */
    public function getPersonAnime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonAnime($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPersonVoicesBadRequestException
     *
     * @return null|Model\PersonVoiceActingRoles|ResponseInterface
     */
    public function getPersonVoices(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonVoices($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPersonMangaBadRequestException
     *
     * @return null|Model\PersonManga|ResponseInterface
     */
    public function getPersonManga(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonManga($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPersonPicturesBadRequestException
     *
     * @return null|Model\PersonPictures|ResponseInterface
     */
    public function getPersonPictures(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPersonPictures($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetProducerByIdBadRequestException
     *
     * @return null|Model\ProducersIdGetResponse200|ResponseInterface
     */
    public function getProducerById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducerById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetProducerFullByIdBadRequestException
     *
     * @return null|Model\ProducersIdFullGetResponse200|ResponseInterface
     */
    public function getProducerFullById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducerFullById($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetProducerExternalBadRequestException
     *
     * @return null|Model\ExternalLinks|ResponseInterface
     */
    public function getProducerExternal(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducerExternal($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRandomAnimeBadRequestException
     *
     * @return null|Model\RandomAnimeGetResponse200|ResponseInterface
     */
    public function getRandomAnime(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomAnime(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRandomMangaBadRequestException
     *
     * @return null|Model\RandomMangaGetResponse200|ResponseInterface
     */
    public function getRandomManga(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomManga(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRandomCharactersBadRequestException
     *
     * @return null|Model\RandomCharactersGetResponse200|ResponseInterface
     */
    public function getRandomCharacters(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomCharacters(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRandomPeopleBadRequestException
     *
     * @return null|Model\RandomPeopleGetResponse200|ResponseInterface
     */
    public function getRandomPeople(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomPeople(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRandomUsersBadRequestException
     *
     * @return null|Model\RandomUsersGetResponse200|ResponseInterface
     */
    public function getRandomUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRandomUsers(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRecentAnimeRecommendationsBadRequestException
     *
     * @return null|Model\Recommendations|ResponseInterface
     */
    public function getRecentAnimeRecommendations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRecentAnimeRecommendations($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRecentMangaRecommendationsBadRequestException
     *
     * @return null|Model\Recommendations|ResponseInterface
     */
    public function getRecentMangaRecommendations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRecentMangaRecommendations($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int  $page
     * @var bool $preliminary Any reviews left during an ongoing anime/manga, those reviews are tagged as preliminary. NOTE: Preliminary reviews are not returned by default so if the entry is airing/publishing you need to add this otherwise you will get an empty list. e.g usage: `?preliminary=true`
     * @var bool $spoiler Any reviews that are tagged as a spoiler. Spoiler reviews are not returned by default. e.g usage: `?spoiler=true`
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRecentAnimeReviewsBadRequestException
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
     * @var int  $page
     * @var bool $preliminary Any reviews left during an ongoing anime/manga, those reviews are tagged as preliminary. NOTE: Preliminary reviews are not returned by default so if the entry is airing/publishing you need to add this otherwise you will get an empty list. e.g usage: `?preliminary=true`
     * @var bool $spoiler Any reviews that are tagged as a spoiler. Spoiler reviews are not returned by default. e.g usage: `?spoiler=true`
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetRecentMangaReviewsBadRequestException
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
     * @var string $filter Filter by day
     * @var string $kids When supplied, it will filter entries with the `Kids` Genre Demographic. When supplied as `kids=true`, it will return only Kid entries and when supplied as `kids=false`, it will filter out any Kid entries. Defaults to `false`.
     * @var string $sfw 'Safe For Work'. When supplied, it will filter entries with the `Hentai` Genre. When supplied as `sfw=true`, it will return only SFW entries and when supplied as `sfw=false`, it will filter out any Hentai entries. Defaults to `false`.
     * @var bool   $unapproved This is a flag. When supplied it will include entries which are unapproved. Unapproved entries on MyAnimeList are those that are user submitted and have not yet been approved by MAL to show up on other pages. They will have their own specifc pages and are often removed resulting in a 404 error. You do not need to pass a value to it. e.g usage: `?unapproved`
     * @var int    $page
     * @var int    $limit
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetSchedulesBadRequestException
     *
     * @return null|Model\Schedules|ResponseInterface
     */
    public function getSchedules(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSchedules($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool   $unapproved This is a flag. When supplied it will include entries which are unapproved. Unapproved entries on MyAnimeList are those that are user submitted and have not yet been approved by MAL to show up on other pages. They will have their own specifc pages and are often removed resulting in a 404 error. You do not need to pass a value to it. e.g usage: `?unapproved`
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $type
     * @var float  $score
     * @var float  $min_score set a minimum score for results
     * @var float  $max_score Set a maximum score for results
     * @var string $status
     * @var string $rating
     * @var bool   $sfw Filter out Adult entries
     * @var string $genres Filter by genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     * @var string $genres_exclude Exclude genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     * @var string $producers Filter by producer(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     * @var string $start_date Filter by starting date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     * @var string $end_date Filter by ending date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetAnimeSearchBadRequestException
     *
     * @return null|Model\AnimeSearch|ResponseInterface
     */
    public function getAnimeSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAnimeSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool   $unapproved This is a flag. When supplied it will include entries which are unapproved. Unapproved entries on MyAnimeList are those that are user submitted and have not yet been approved by MAL to show up on other pages. They will have their own specifc pages and are often removed resulting in a 404 error. You do not need to pass a value to it. e.g usage: `?unapproved`
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $type
     * @var float  $score
     * @var float  $min_score set a minimum score for results
     * @var float  $max_score Set a maximum score for results
     * @var string $status
     * @var bool   $sfw Filter out Adult entries
     * @var string $genres Filter by genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     * @var string $genres_exclude Exclude genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     * @var string $magazines Filter by magazine(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     * @var string $start_date Filter by starting date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     * @var string $end_date Filter by ending date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetMangaSearchBadRequestException
     *
     * @return null|Model\MangaSearch|ResponseInterface
     */
    public function getMangaSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMangaSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPeopleSearchBadRequestException
     *
     * @return null|Model\PeopleSearch|ResponseInterface
     */
    public function getPeopleSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPeopleSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetCharactersSearchBadRequestException
     *
     * @return null|Model\CharactersSearch|ResponseInterface
     */
    public function getCharactersSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCharactersSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $gender
     * @var string $location
     * @var int    $maxAge
     * @var int    $minAge
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUsersSearchBadRequestException
     *
     * @return null|Model\UsersSearch|ResponseInterface
     */
    public function getUsersSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersSearch($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserByIdBadRequestException
     *
     * @return null|Model\UsersUserbyidIdGetResponse200|ResponseInterface
     */
    public function getUserById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $type
     * @var string $category
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetClubsSearchBadRequestException
     *
     * @return null|Model\ClubsSearch|ResponseInterface
     */
    public function getClubsSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetClubsSearch($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var int    $limit
     * @var string $q
     * @var string $order_by
     * @var string $sort
     * @var string $letter Return entries starting with the given letter
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetProducersBadRequestException
     *
     * @return null|Model\Producers|ResponseInterface
     */
    public function getProducers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetProducers($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter Entry types
     * @var bool   $sfw 'Safe For Work'. This is a flag. When supplied it will filter out entries according to the SFW Policy. You do not need to pass a value to it. e.g usage: `?sfw`
     * @var bool   $unapproved This is a flag. When supplied it will include entries which are unapproved. Unapproved entries on MyAnimeList are those that are user submitted and have not yet been approved by MAL to show up on other pages. They will have their own specifc pages and are often removed resulting in a 404 error. You do not need to pass a value to it. e.g usage: `?unapproved`
     * @var int    $page
     * @var int    $limit
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetSeasonNowBadRequestException
     *
     * @return null|Model\AnimeSearch|ResponseInterface
     */
    public function getSeasonNow(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeasonNow($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter Entry types
     * @var bool   $sfw 'Safe For Work'. This is a flag. When supplied it will filter out entries according to the SFW Policy. You do not need to pass a value to it. e.g usage: `?sfw`
     * @var bool   $unapproved This is a flag. When supplied it will include entries which are unapproved. Unapproved entries on MyAnimeList are those that are user submitted and have not yet been approved by MAL to show up on other pages. They will have their own specifc pages and are often removed resulting in a 404 error. You do not need to pass a value to it. e.g usage: `?unapproved`
     * @var int    $page
     * @var int    $limit
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetSeasonBadRequestException
     *
     * @return null|Model\AnimeSearch|ResponseInterface
     */
    public function getSeason(int $year, string $season, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeason($year, $season, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetSeasonsListBadRequestException
     *
     * @return null|Model\Seasons|ResponseInterface
     */
    public function getSeasonsList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeasonsList(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $filter Entry types
     * @var bool   $sfw 'Safe For Work'. This is a flag. When supplied it will filter out entries according to the SFW Policy. You do not need to pass a value to it. e.g usage: `?sfw`
     * @var bool   $unapproved This is a flag. When supplied it will include entries which are unapproved. Unapproved entries on MyAnimeList are those that are user submitted and have not yet been approved by MAL to show up on other pages. They will have their own specifc pages and are often removed resulting in a 404 error. You do not need to pass a value to it. e.g usage: `?unapproved`
     * @var int    $page
     * @var int    $limit
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetSeasonUpcomingBadRequestException
     *
     * @return null|Model\AnimeSearch|ResponseInterface
     */
    public function getSeasonUpcoming(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSeasonUpcoming($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $type
     * @var string $filter
     * @var string $rating
     * @var bool   $sfw Filter out Adult entries
     * @var int    $page
     * @var int    $limit
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetTopAnimeBadRequestException
     *
     * @return null|Model\AnimeSearch|ResponseInterface
     */
    public function getTopAnime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopAnime($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $type
     * @var string $filter
     * @var int    $page
     * @var int    $limit
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetTopMangaBadRequestException
     *
     * @return null|Model\MangaSearch|ResponseInterface
     */
    public function getTopManga(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopManga($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     * @var int $limit
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetTopPeopleBadRequestException
     *
     * @return null|Model\PeopleSearch|ResponseInterface
     */
    public function getTopPeople(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopPeople($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     * @var int $limit
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetTopCharactersBadRequestException
     *
     * @return null|Model\CharactersSearch|ResponseInterface
     */
    public function getTopCharacters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopCharacters($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page
     * @var string $type
     * @var bool   $preliminary Whether the results include preliminary reviews or not. Defaults to true.
     * @var bool   $spoilers Whether the results include reviews with spoilers or not. Defaults to true.
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetTopReviewsBadRequestException
     *
     * @return null|Model\TopReviewsGetResponse200|ResponseInterface
     */
    public function getTopReviews(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTopReviews($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserFullProfileBadRequestException
     *
     * @return null|Model\UsersUsernameFullGetResponse200|ResponseInterface
     */
    public function getUserFullProfile(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserFullProfile($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserProfileBadRequestException
     *
     * @return null|Model\UsersUsernameGetResponse200|ResponseInterface
     */
    public function getUserProfile(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserProfile($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserStatisticsBadRequestException
     *
     * @return null|Model\UserStatistics|ResponseInterface
     */
    public function getUserStatistics(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserStatistics($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserFavoritesBadRequestException
     *
     * @return null|Model\UsersUsernameFavoritesGetResponse200|ResponseInterface
     */
    public function getUserFavorites(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserFavorites($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserUpdatesBadRequestException
     *
     * @return null|Model\UserUpdates|ResponseInterface
     */
    public function getUserUpdates(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserUpdates($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserAboutBadRequestException
     *
     * @return null|Model\UserAbout|ResponseInterface
     */
    public function getUserAbout(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserAbout($username), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $type
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserHistoryBadRequestException
     *
     * @return null|Model\UserHistory|ResponseInterface
     */
    public function getUserHistory(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserHistory($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserFriendsBadRequestException
     *
     * @return null|Model\UserFriends|ResponseInterface
     */
    public function getUserFriends(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserFriends($username, $queryParameters), $fetch);
    }

    /**
     * User Anime lists have been discontinued since May 1st, 2022. <a href='https://docs.google.com/document/d/1-6H-agSnqa8Mfmw802UYfGQrceIEnAaEh4uCXAPiX5A'>Read more</a>.
     *
     * @param array $queryParameters {
     *
     * @var string $status
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserAnimelistBadRequestException
     *
     * @return null|ResponseInterface
     */
    public function getUserAnimelist(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserAnimelist($username, $queryParameters), $fetch);
    }

    /**
     * User Manga lists have been discontinued since May 1st, 2022. <a href='https://docs.google.com/document/d/1-6H-agSnqa8Mfmw802UYfGQrceIEnAaEh4uCXAPiX5A'>Read more</a>.
     *
     * @param array $queryParameters {
     *
     * @var string $status
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserMangaListBadRequestException
     *
     * @return null|ResponseInterface
     */
    public function getUserMangaList(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserMangaList($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserReviewsBadRequestException
     *
     * @return null|Model\UsersUsernameReviewsGetResponse200|ResponseInterface
     */
    public function getUserReviews(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserReviews($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserRecommendationsBadRequestException
     *
     * @return null|Model\Recommendations|ResponseInterface
     */
    public function getUserRecommendations(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserRecommendations($username, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserClubsBadRequestException
     *
     * @return null|Model\UserClubs|ResponseInterface
     */
    public function getUserClubs(string $username, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserClubs($username, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserExternalBadRequestException
     *
     * @return null|Model\ExternalLinks|ResponseInterface
     */
    public function getUserExternal(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserExternal($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetWatchRecentEpisodesBadRequestException
     *
     * @return null|Model\WatchEpisodes|ResponseInterface
     */
    public function getWatchRecentEpisodes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchRecentEpisodes(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetWatchPopularEpisodesBadRequestException
     *
     * @return null|Model\WatchEpisodes|ResponseInterface
     */
    public function getWatchPopularEpisodes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchPopularEpisodes(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetWatchRecentPromosBadRequestException
     *
     * @return null|Model\WatchPromos|ResponseInterface
     */
    public function getWatchRecentPromos(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchRecentPromos($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetWatchPopularPromosBadRequestException
     *
     * @return null|Model\WatchPromos|ResponseInterface
     */
    public function getWatchPopularPromos(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetWatchPopularPromos(), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.jikan.moe/v4');
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
