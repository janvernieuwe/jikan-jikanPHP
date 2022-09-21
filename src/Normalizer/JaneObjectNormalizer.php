<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Anime;
use Jikan\JikanPHP\Model\AnimeCharacters;
use Jikan\JikanPHP\Model\AnimeCharactersDataItem;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemCharacter;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItem;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItemPerson;
use Jikan\JikanPHP\Model\AnimeEpisode;
use Jikan\JikanPHP\Model\AnimeEpisodes;
use Jikan\JikanPHP\Model\AnimeEpisodesdataItem;
use Jikan\JikanPHP\Model\AnimeFull;
use Jikan\JikanPHP\Model\AnimeFullExternalItem;
use Jikan\JikanPHP\Model\AnimeFullRelationsItem;
use Jikan\JikanPHP\Model\AnimeFullStreamingItem;
use Jikan\JikanPHP\Model\AnimeFullTheme;
use Jikan\JikanPHP\Model\AnimeIdEpisodesEpisodeGetResponse200;
use Jikan\JikanPHP\Model\AnimeIdFullGetResponse200;
use Jikan\JikanPHP\Model\AnimeIdGetResponse200;
use Jikan\JikanPHP\Model\AnimeIdRelationsGetResponse200;
use Jikan\JikanPHP\Model\AnimeImages;
use Jikan\JikanPHP\Model\AnimeImagesJpg;
use Jikan\JikanPHP\Model\AnimeImagesWebp;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\AnimeNews;
use Jikan\JikanPHP\Model\AnimeRelations;
use Jikan\JikanPHP\Model\AnimeRelationsDataItem;
use Jikan\JikanPHP\Model\AnimeReview;
use Jikan\JikanPHP\Model\AnimeReviews;
use Jikan\JikanPHP\Model\AnimeReviewScores;
use Jikan\JikanPHP\Model\AnimeReviewsdataItem;
use Jikan\JikanPHP\Model\AnimeSearch;
use Jikan\JikanPHP\Model\AnimeStaff;
use Jikan\JikanPHP\Model\AnimeStaffDataItem;
use Jikan\JikanPHP\Model\AnimeStaffDataItemPerson;
use Jikan\JikanPHP\Model\AnimeStatistics;
use Jikan\JikanPHP\Model\AnimeStatisticsData;
use Jikan\JikanPHP\Model\AnimeStatisticsDataScoresItem;
use Jikan\JikanPHP\Model\AnimeThemes;
use Jikan\JikanPHP\Model\AnimeThemesData;
use Jikan\JikanPHP\Model\AnimeUserupdates;
use Jikan\JikanPHP\Model\AnimeUserupdatesdataItem;
use Jikan\JikanPHP\Model\AnimeVideos;
use Jikan\JikanPHP\Model\AnimeVideosData;
use Jikan\JikanPHP\Model\AnimeVideosDataEpisodesItem;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItem;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItemMeta;
use Jikan\JikanPHP\Model\AnimeVideosDataPromoItem;
use Jikan\JikanPHP\Model\AnimeVideosEpisodes;
use Jikan\JikanPHP\Model\AnimeVideosEpisodesdataItem;
use Jikan\JikanPHP\Model\Broadcast;
use Jikan\JikanPHP\Model\Character;
use Jikan\JikanPHP\Model\CharacterAnime;
use Jikan\JikanPHP\Model\CharacterAnimeDataItem;
use Jikan\JikanPHP\Model\CharacterFull;
use Jikan\JikanPHP\Model\CharacterFullAnimeItem;
use Jikan\JikanPHP\Model\CharacterFullMangaItem;
use Jikan\JikanPHP\Model\CharacterFullVoicesItem;
use Jikan\JikanPHP\Model\CharacterImages;
use Jikan\JikanPHP\Model\CharacterImagesJpg;
use Jikan\JikanPHP\Model\CharacterImagesWebp;
use Jikan\JikanPHP\Model\CharacterManga;
use Jikan\JikanPHP\Model\CharacterMangaDataItem;
use Jikan\JikanPHP\Model\CharacterMeta;
use Jikan\JikanPHP\Model\CharacterPictures;
use Jikan\JikanPHP\Model\CharacterPicturesDataItem;
use Jikan\JikanPHP\Model\CharactersIdFullGetResponse200;
use Jikan\JikanPHP\Model\CharactersIdGetResponse200;
use Jikan\JikanPHP\Model\CharactersSearch;
use Jikan\JikanPHP\Model\CharacterVoiceActors;
use Jikan\JikanPHP\Model\CharacterVoiceActorsDataItem;
use Jikan\JikanPHP\Model\Club;
use Jikan\JikanPHP\Model\ClubMember;
use Jikan\JikanPHP\Model\ClubRelations;
use Jikan\JikanPHP\Model\ClubRelationsData;
use Jikan\JikanPHP\Model\ClubsIdGetResponse200;
use Jikan\JikanPHP\Model\ClubsIdMembersGetResponse200;
use Jikan\JikanPHP\Model\ClubsSearch;
use Jikan\JikanPHP\Model\ClubStaff;
use Jikan\JikanPHP\Model\ClubStaffDataItem;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Model\CommonImagesJpg;
use Jikan\JikanPHP\Model\Daterange;
use Jikan\JikanPHP\Model\DaterangeProp;
use Jikan\JikanPHP\Model\DaterangePropFrom;
use Jikan\JikanPHP\Model\DaterangePropTo;
use Jikan\JikanPHP\Model\EntryMeta;
use Jikan\JikanPHP\Model\EntryRecommendations;
use Jikan\JikanPHP\Model\EntryRecommendationsDataItem;
use Jikan\JikanPHP\Model\ExternalLinks;
use Jikan\JikanPHP\Model\ExternalLinksDataItem;
use Jikan\JikanPHP\Model\Forum;
use Jikan\JikanPHP\Model\ForumDataItem;
use Jikan\JikanPHP\Model\ForumDataItemLastComment;
use Jikan\JikanPHP\Model\Genre;
use Jikan\JikanPHP\Model\Genres;
use Jikan\JikanPHP\Model\History;
use Jikan\JikanPHP\Model\Magazine;
use Jikan\JikanPHP\Model\Magazines;
use Jikan\JikanPHP\Model\MalUrl;
use Jikan\JikanPHP\Model\MalUrl2;
use Jikan\JikanPHP\Model\Manga;
use Jikan\JikanPHP\Model\MangaCharacters;
use Jikan\JikanPHP\Model\MangaCharactersDataItem;
use Jikan\JikanPHP\Model\MangaFull;
use Jikan\JikanPHP\Model\MangaFullExternalItem;
use Jikan\JikanPHP\Model\MangaFullRelationsItem;
use Jikan\JikanPHP\Model\MangaIdFullGetResponse200;
use Jikan\JikanPHP\Model\MangaIdGetResponse200;
use Jikan\JikanPHP\Model\MangaIdRelationsGetResponse200;
use Jikan\JikanPHP\Model\MangaImages;
use Jikan\JikanPHP\Model\MangaImagesJpg;
use Jikan\JikanPHP\Model\MangaImagesWebp;
use Jikan\JikanPHP\Model\MangaMeta;
use Jikan\JikanPHP\Model\MangaNews;
use Jikan\JikanPHP\Model\MangaPictures;
use Jikan\JikanPHP\Model\MangaReview;
use Jikan\JikanPHP\Model\MangaReviews;
use Jikan\JikanPHP\Model\MangaReviewScores;
use Jikan\JikanPHP\Model\MangaReviewsdataItem;
use Jikan\JikanPHP\Model\MangaSearch;
use Jikan\JikanPHP\Model\MangaStatistics;
use Jikan\JikanPHP\Model\MangaStatisticsData;
use Jikan\JikanPHP\Model\MangaStatisticsDataScoresItem;
use Jikan\JikanPHP\Model\MangaUserupdates;
use Jikan\JikanPHP\Model\MangaUserupdatesdataItem;
use Jikan\JikanPHP\Model\Moreinfo;
use Jikan\JikanPHP\Model\MoreinfoData;
use Jikan\JikanPHP\Model\News;
use Jikan\JikanPHP\Model\NewsDataItem;
use Jikan\JikanPHP\Model\Pagination;
use Jikan\JikanPHP\Model\PaginationPagination;
use Jikan\JikanPHP\Model\PaginationPlus;
use Jikan\JikanPHP\Model\PaginationPlusPagination;
use Jikan\JikanPHP\Model\PaginationPlusPaginationItems;
use Jikan\JikanPHP\Model\PeopleIdFullGetResponse200;
use Jikan\JikanPHP\Model\PeopleIdGetResponse200;
use Jikan\JikanPHP\Model\PeopleImages;
use Jikan\JikanPHP\Model\PeopleImagesJpg;
use Jikan\JikanPHP\Model\PeopleSearch;
use Jikan\JikanPHP\Model\PeopleSearchdataItem;
use Jikan\JikanPHP\Model\Person;
use Jikan\JikanPHP\Model\PersonAnime;
use Jikan\JikanPHP\Model\PersonAnimeDataItem;
use Jikan\JikanPHP\Model\PersonFull;
use Jikan\JikanPHP\Model\PersonFullAnimeItem;
use Jikan\JikanPHP\Model\PersonFullMangaItem;
use Jikan\JikanPHP\Model\PersonFullVoicesItem;
use Jikan\JikanPHP\Model\PersonManga;
use Jikan\JikanPHP\Model\PersonMangaDataItem;
use Jikan\JikanPHP\Model\PersonMeta;
use Jikan\JikanPHP\Model\PersonPictures;
use Jikan\JikanPHP\Model\PersonVoiceActingRoles;
use Jikan\JikanPHP\Model\PersonVoiceActingRolesDataItem;
use Jikan\JikanPHP\Model\Pictures;
use Jikan\JikanPHP\Model\PicturesDataItem;
use Jikan\JikanPHP\Model\PicturesVariants;
use Jikan\JikanPHP\Model\PicturesVariantsDataItem;
use Jikan\JikanPHP\Model\Producer;
use Jikan\JikanPHP\Model\ProducerFull;
use Jikan\JikanPHP\Model\ProducerFullExternalItem;
use Jikan\JikanPHP\Model\Producers;
use Jikan\JikanPHP\Model\ProducersIdFullGetResponse200;
use Jikan\JikanPHP\Model\ProducersIdGetResponse200;
use Jikan\JikanPHP\Model\Random;
use Jikan\JikanPHP\Model\RandomAnimeGetResponse200;
use Jikan\JikanPHP\Model\RandomCharactersGetResponse200;
use Jikan\JikanPHP\Model\RandomMangaGetResponse200;
use Jikan\JikanPHP\Model\RandomPeopleGetResponse200;
use Jikan\JikanPHP\Model\RandomUsersGetResponse200;
use Jikan\JikanPHP\Model\Recommendations;
use Jikan\JikanPHP\Model\RecommendationsdataItem;
use Jikan\JikanPHP\Model\Relation;
use Jikan\JikanPHP\Model\ReviewsCollection;
use Jikan\JikanPHP\Model\Schedules;
use Jikan\JikanPHP\Model\Seasons;
use Jikan\JikanPHP\Model\SeasonsDataItem;
use Jikan\JikanPHP\Model\StreamingLinks;
use Jikan\JikanPHP\Model\StreamingLinksDataItem;
use Jikan\JikanPHP\Model\TopReviewsGetResponse200;
use Jikan\JikanPHP\Model\TopReviewsGetResponse200Data;
use Jikan\JikanPHP\Model\Trailer;
use Jikan\JikanPHP\Model\TrailerBase;
use Jikan\JikanPHP\Model\TrailerImages;
use Jikan\JikanPHP\Model\TrailerImagesImages;
use Jikan\JikanPHP\Model\UserAbout;
use Jikan\JikanPHP\Model\UserAboutDataItem;
use Jikan\JikanPHP\Model\UserById;
use Jikan\JikanPHP\Model\UserClubs;
use Jikan\JikanPHP\Model\UserClubsdataItem;
use Jikan\JikanPHP\Model\UserFavorites;
use Jikan\JikanPHP\Model\UserFavoritesAnimeItem;
use Jikan\JikanPHP\Model\UserFavoritesCharactersItem;
use Jikan\JikanPHP\Model\UserFavoritesMangaItem;
use Jikan\JikanPHP\Model\UserFriends;
use Jikan\JikanPHP\Model\UserFriendsdataItem;
use Jikan\JikanPHP\Model\UserHistory;
use Jikan\JikanPHP\Model\UserImages;
use Jikan\JikanPHP\Model\UserImagesJpg;
use Jikan\JikanPHP\Model\UserImagesWebp;
use Jikan\JikanPHP\Model\UserMeta;
use Jikan\JikanPHP\Model\UserProfile;
use Jikan\JikanPHP\Model\UserProfileFull;
use Jikan\JikanPHP\Model\UserProfileFullExternalItem;
use Jikan\JikanPHP\Model\UserProfileFullStatistics;
use Jikan\JikanPHP\Model\UserProfileFullStatisticsAnime;
use Jikan\JikanPHP\Model\UserProfileFullStatisticsManga;
use Jikan\JikanPHP\Model\UsersSearch;
use Jikan\JikanPHP\Model\UsersSearchdataItem;
use Jikan\JikanPHP\Model\UserStatistics;
use Jikan\JikanPHP\Model\UserStatisticsData;
use Jikan\JikanPHP\Model\UserStatisticsDataAnime;
use Jikan\JikanPHP\Model\UserStatisticsDataManga;
use Jikan\JikanPHP\Model\UsersTemp;
use Jikan\JikanPHP\Model\UsersTempDataItem;
use Jikan\JikanPHP\Model\UsersTempDataItemAnimeStats;
use Jikan\JikanPHP\Model\UsersTempDataItemFavorites;
use Jikan\JikanPHP\Model\UsersTempDataItemImages;
use Jikan\JikanPHP\Model\UsersTempDataItemImagesJpg;
use Jikan\JikanPHP\Model\UsersTempDataItemImagesWebp;
use Jikan\JikanPHP\Model\UsersTempDataItemMangaStats;
use Jikan\JikanPHP\Model\UsersUserbyidIdGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameFavoritesGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameFullGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameReviewsGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameReviewsGetResponse200Data;
use Jikan\JikanPHP\Model\UserUpdates;
use Jikan\JikanPHP\Model\UserUpdatesData;
use Jikan\JikanPHP\Model\UserUpdatesDataAnimeItem;
use Jikan\JikanPHP\Model\UserUpdatesDataMangaItem;
use Jikan\JikanPHP\Model\WatchEpisodes;
use Jikan\JikanPHP\Model\WatchEpisodesdataItem;
use Jikan\JikanPHP\Model\WatchEpisodesdataItemEpisodesItem;
use Jikan\JikanPHP\Model\WatchPromos;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Jikan\JikanPHP\Runtime\Normalizer\ReferenceNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = [AnimeEpisodes::class => AnimeEpisodesNormalizer::class, AnimeEpisodesdataItem::class => AnimeEpisodesdataItemNormalizer::class, AnimeNews::class => AnimeNewsNormalizer::class, AnimeVideosEpisodes::class => AnimeVideosEpisodesNormalizer::class, AnimeVideosEpisodesdataItem::class => AnimeVideosEpisodesdataItemNormalizer::class, CharacterPictures::class => CharacterPicturesNormalizer::class, CharacterPicturesDataItem::class => CharacterPicturesDataItemNormalizer::class, ClubMember::class => ClubMemberNormalizer::class, MangaNews::class => MangaNewsNormalizer::class, MangaPictures::class => MangaPicturesNormalizer::class, PersonPictures::class => PersonPicturesNormalizer::class, Random::class => RandomNormalizer::class, Schedules::class => SchedulesNormalizer::class, UsersSearch::class => UsersSearchNormalizer::class, UsersSearchdataItem::class => UsersSearchdataItemNormalizer::class, Seasons::class => SeasonsNormalizer::class, SeasonsDataItem::class => SeasonsDataItemNormalizer::class, ReviewsCollection::class => ReviewsCollectionNormalizer::class, UserFriends::class => UserFriendsNormalizer::class, UserFriendsdataItem::class => UserFriendsdataItemNormalizer::class, UserClubs::class => UserClubsNormalizer::class, UserClubsdataItem::class => UserClubsdataItemNormalizer::class, WatchEpisodes::class => WatchEpisodesNormalizer::class, WatchEpisodesdataItem::class => WatchEpisodesdataItemNormalizer::class, WatchEpisodesdataItemEpisodesItem::class => WatchEpisodesdataItemEpisodesItemNormalizer::class, WatchPromos::class => WatchPromosNormalizer::class, AnimeCharacters::class => AnimeCharactersNormalizer::class, AnimeCharactersDataItem::class => AnimeCharactersDataItemNormalizer::class, AnimeCharactersDataItemCharacter::class => AnimeCharactersDataItemCharacterNormalizer::class, AnimeCharactersDataItemVoiceActorsItem::class => AnimeCharactersDataItemVoiceActorsItemNormalizer::class, AnimeCharactersDataItemVoiceActorsItemPerson::class => AnimeCharactersDataItemVoiceActorsItemPersonNormalizer::class, AnimeSearch::class => AnimeSearchNormalizer::class, AnimeEpisode::class => AnimeEpisodeNormalizer::class, AnimeFull::class => AnimeFullNormalizer::class, AnimeFullRelationsItem::class => AnimeFullRelationsItemNormalizer::class, AnimeFullTheme::class => AnimeFullThemeNormalizer::class, AnimeFullExternalItem::class => AnimeFullExternalItemNormalizer::class, AnimeFullStreamingItem::class => AnimeFullStreamingItemNormalizer::class, AnimeRelations::class => AnimeRelationsNormalizer::class, AnimeRelationsDataItem::class => AnimeRelationsDataItemNormalizer::class, Anime::class => AnimeNormalizer::class, AnimeStaff::class => AnimeStaffNormalizer::class, AnimeStaffDataItem::class => AnimeStaffDataItemNormalizer::class, AnimeStaffDataItemPerson::class => AnimeStaffDataItemPersonNormalizer::class, AnimeStatistics::class => AnimeStatisticsNormalizer::class, AnimeStatisticsData::class => AnimeStatisticsDataNormalizer::class, AnimeStatisticsDataScoresItem::class => AnimeStatisticsDataScoresItemNormalizer::class, AnimeThemes::class => AnimeThemesNormalizer::class, AnimeThemesData::class => AnimeThemesDataNormalizer::class, AnimeVideos::class => AnimeVideosNormalizer::class, AnimeVideosData::class => AnimeVideosDataNormalizer::class, AnimeVideosDataPromoItem::class => AnimeVideosDataPromoItemNormalizer::class, AnimeVideosDataEpisodesItem::class => AnimeVideosDataEpisodesItemNormalizer::class, AnimeVideosDataMusicVideosItem::class => AnimeVideosDataMusicVideosItemNormalizer::class, AnimeVideosDataMusicVideosItemMeta::class => AnimeVideosDataMusicVideosItemMetaNormalizer::class, CharacterAnime::class => CharacterAnimeNormalizer::class, CharacterAnimeDataItem::class => CharacterAnimeDataItemNormalizer::class, CharactersSearch::class => CharactersSearchNormalizer::class, CharacterFull::class => CharacterFullNormalizer::class, CharacterFullAnimeItem::class => CharacterFullAnimeItemNormalizer::class, CharacterFullMangaItem::class => CharacterFullMangaItemNormalizer::class, CharacterFullVoicesItem::class => CharacterFullVoicesItemNormalizer::class, CharacterManga::class => CharacterMangaNormalizer::class, CharacterMangaDataItem::class => CharacterMangaDataItemNormalizer::class, Character::class => CharacterNormalizer::class, CharacterVoiceActors::class => CharacterVoiceActorsNormalizer::class, CharacterVoiceActorsDataItem::class => CharacterVoiceActorsDataItemNormalizer::class, ClubsSearch::class => ClubsSearchNormalizer::class, ClubRelations::class => ClubRelationsNormalizer::class, ClubRelationsData::class => ClubRelationsDataNormalizer::class, Club::class => ClubNormalizer::class, ClubStaff::class => ClubStaffNormalizer::class, ClubStaffDataItem::class => ClubStaffDataItemNormalizer::class, Trailer::class => TrailerNormalizer::class, TrailerBase::class => TrailerBaseNormalizer::class, TrailerImages::class => TrailerImagesNormalizer::class, TrailerImagesImages::class => TrailerImagesImagesNormalizer::class, Daterange::class => DaterangeNormalizer::class, DaterangeProp::class => DaterangePropNormalizer::class, DaterangePropFrom::class => DaterangePropFromNormalizer::class, DaterangePropTo::class => DaterangePropToNormalizer::class, Broadcast::class => BroadcastNormalizer::class, MalUrl::class => MalUrlNormalizer::class, MalUrl2::class => MalUrl2Normalizer::class, EntryMeta::class => EntryMetaNormalizer::class, Relation::class => RelationNormalizer::class, Pagination::class => PaginationNormalizer::class, PaginationPagination::class => PaginationPaginationNormalizer::class, PaginationPlus::class => PaginationPlusNormalizer::class, PaginationPlusPagination::class => PaginationPlusPaginationNormalizer::class, PaginationPlusPaginationItems::class => PaginationPlusPaginationItemsNormalizer::class, UserMeta::class => UserMetaNormalizer::class, UserById::class => UserByIdNormalizer::class, UserImages::class => UserImagesNormalizer::class, UserImagesJpg::class => UserImagesJpgNormalizer::class, UserImagesWebp::class => UserImagesWebpNormalizer::class, AnimeMeta::class => AnimeMetaNormalizer::class, MangaMeta::class => MangaMetaNormalizer::class, CharacterMeta::class => CharacterMetaNormalizer::class, PersonMeta::class => PersonMetaNormalizer::class, AnimeImages::class => AnimeImagesNormalizer::class, AnimeImagesJpg::class => AnimeImagesJpgNormalizer::class, AnimeImagesWebp::class => AnimeImagesWebpNormalizer::class, MangaImages::class => MangaImagesNormalizer::class, MangaImagesJpg::class => MangaImagesJpgNormalizer::class, MangaImagesWebp::class => MangaImagesWebpNormalizer::class, CharacterImages::class => CharacterImagesNormalizer::class, CharacterImagesJpg::class => CharacterImagesJpgNormalizer::class, CharacterImagesWebp::class => CharacterImagesWebpNormalizer::class, PeopleImages::class => PeopleImagesNormalizer::class, PeopleImagesJpg::class => PeopleImagesJpgNormalizer::class, CommonImages::class => CommonImagesNormalizer::class, CommonImagesJpg::class => CommonImagesJpgNormalizer::class, ExternalLinks::class => ExternalLinksNormalizer::class, ExternalLinksDataItem::class => ExternalLinksDataItemNormalizer::class, Forum::class => ForumNormalizer::class, ForumDataItem::class => ForumDataItemNormalizer::class, ForumDataItemLastComment::class => ForumDataItemLastCommentNormalizer::class, Genres::class => GenresNormalizer::class, Genre::class => GenreNormalizer::class, Magazines::class => MagazinesNormalizer::class, Magazine::class => MagazineNormalizer::class, MangaCharacters::class => MangaCharactersNormalizer::class, MangaCharactersDataItem::class => MangaCharactersDataItemNormalizer::class, MangaSearch::class => MangaSearchNormalizer::class, MangaFull::class => MangaFullNormalizer::class, MangaFullRelationsItem::class => MangaFullRelationsItemNormalizer::class, MangaFullExternalItem::class => MangaFullExternalItemNormalizer::class, Manga::class => MangaNormalizer::class, MangaStatistics::class => MangaStatisticsNormalizer::class, MangaStatisticsData::class => MangaStatisticsDataNormalizer::class, MangaStatisticsDataScoresItem::class => MangaStatisticsDataScoresItemNormalizer::class, Moreinfo::class => MoreinfoNormalizer::class, MoreinfoData::class => MoreinfoDataNormalizer::class, News::class => NewsNormalizer::class, NewsDataItem::class => NewsDataItemNormalizer::class, PersonAnime::class => PersonAnimeNormalizer::class, PersonAnimeDataItem::class => PersonAnimeDataItemNormalizer::class, PeopleSearch::class => PeopleSearchNormalizer::class, PeopleSearchdataItem::class => PeopleSearchdataItemNormalizer::class, PersonFull::class => PersonFullNormalizer::class, PersonFullAnimeItem::class => PersonFullAnimeItemNormalizer::class, PersonFullMangaItem::class => PersonFullMangaItemNormalizer::class, PersonFullVoicesItem::class => PersonFullVoicesItemNormalizer::class, PersonManga::class => PersonMangaNormalizer::class, PersonMangaDataItem::class => PersonMangaDataItemNormalizer::class, Person::class => PersonNormalizer::class, PersonVoiceActingRoles::class => PersonVoiceActingRolesNormalizer::class, PersonVoiceActingRolesDataItem::class => PersonVoiceActingRolesDataItemNormalizer::class, Pictures::class => PicturesNormalizer::class, PicturesDataItem::class => PicturesDataItemNormalizer::class, PicturesVariants::class => PicturesVariantsNormalizer::class, PicturesVariantsDataItem::class => PicturesVariantsDataItemNormalizer::class, Producers::class => ProducersNormalizer::class, ProducerFull::class => ProducerFullNormalizer::class, ProducerFullExternalItem::class => ProducerFullExternalItemNormalizer::class, Producer::class => ProducerNormalizer::class, UserAbout::class => UserAboutNormalizer::class, UserAboutDataItem::class => UserAboutDataItemNormalizer::class, UserFavorites::class => UserFavoritesNormalizer::class, UserFavoritesAnimeItem::class => UserFavoritesAnimeItemNormalizer::class, UserFavoritesMangaItem::class => UserFavoritesMangaItemNormalizer::class, UserFavoritesCharactersItem::class => UserFavoritesCharactersItemNormalizer::class, UserProfileFull::class => UserProfileFullNormalizer::class, UserProfileFullStatistics::class => UserProfileFullStatisticsNormalizer::class, UserProfileFullStatisticsAnime::class => UserProfileFullStatisticsAnimeNormalizer::class, UserProfileFullStatisticsManga::class => UserProfileFullStatisticsMangaNormalizer::class, UserProfileFullExternalItem::class => UserProfileFullExternalItemNormalizer::class, UserHistory::class => UserHistoryNormalizer::class, History::class => HistoryNormalizer::class, UserUpdates::class => UserUpdatesNormalizer::class, UserUpdatesData::class => UserUpdatesDataNormalizer::class, UserUpdatesDataAnimeItem::class => UserUpdatesDataAnimeItemNormalizer::class, UserUpdatesDataMangaItem::class => UserUpdatesDataMangaItemNormalizer::class, UserProfile::class => UserProfileNormalizer::class, UsersTemp::class => UsersTempNormalizer::class, UsersTempDataItem::class => UsersTempDataItemNormalizer::class, UsersTempDataItemImages::class => UsersTempDataItemImagesNormalizer::class, UsersTempDataItemImagesJpg::class => UsersTempDataItemImagesJpgNormalizer::class, UsersTempDataItemImagesWebp::class => UsersTempDataItemImagesWebpNormalizer::class, UsersTempDataItemAnimeStats::class => UsersTempDataItemAnimeStatsNormalizer::class, UsersTempDataItemMangaStats::class => UsersTempDataItemMangaStatsNormalizer::class, UsersTempDataItemFavorites::class => UsersTempDataItemFavoritesNormalizer::class, UserStatistics::class => UserStatisticsNormalizer::class, UserStatisticsData::class => UserStatisticsDataNormalizer::class, UserStatisticsDataAnime::class => UserStatisticsDataAnimeNormalizer::class, UserStatisticsDataManga::class => UserStatisticsDataMangaNormalizer::class, Recommendations::class => RecommendationsNormalizer::class, RecommendationsdataItem::class => RecommendationsdataItemNormalizer::class, EntryRecommendations::class => EntryRecommendationsNormalizer::class, EntryRecommendationsDataItem::class => EntryRecommendationsDataItemNormalizer::class, MangaReview::class => MangaReviewNormalizer::class, MangaReviewScores::class => MangaReviewScoresNormalizer::class, AnimeReview::class => AnimeReviewNormalizer::class, AnimeReviewScores::class => AnimeReviewScoresNormalizer::class, AnimeReviews::class => AnimeReviewsNormalizer::class, AnimeReviewsdataItem::class => AnimeReviewsdataItemNormalizer::class, MangaReviews::class => MangaReviewsNormalizer::class, MangaReviewsdataItem::class => MangaReviewsdataItemNormalizer::class, StreamingLinks::class => StreamingLinksNormalizer::class, StreamingLinksDataItem::class => StreamingLinksDataItemNormalizer::class, AnimeUserupdates::class => AnimeUserupdatesNormalizer::class, AnimeUserupdatesdataItem::class => AnimeUserupdatesdataItemNormalizer::class, MangaUserupdates::class => MangaUserupdatesNormalizer::class, MangaUserupdatesdataItem::class => MangaUserupdatesdataItemNormalizer::class, AnimeIdFullGetResponse200::class => AnimeIdFullGetResponse200Normalizer::class, AnimeIdGetResponse200::class => AnimeIdGetResponse200Normalizer::class, AnimeIdEpisodesEpisodeGetResponse200::class => AnimeIdEpisodesEpisodeGetResponse200Normalizer::class, AnimeIdRelationsGetResponse200::class => AnimeIdRelationsGetResponse200Normalizer::class, CharactersIdFullGetResponse200::class => CharactersIdFullGetResponse200Normalizer::class, CharactersIdGetResponse200::class => CharactersIdGetResponse200Normalizer::class, ClubsIdGetResponse200::class => ClubsIdGetResponse200Normalizer::class, ClubsIdMembersGetResponse200::class => ClubsIdMembersGetResponse200Normalizer::class, MangaIdFullGetResponse200::class => MangaIdFullGetResponse200Normalizer::class, MangaIdGetResponse200::class => MangaIdGetResponse200Normalizer::class, MangaIdRelationsGetResponse200::class => MangaIdRelationsGetResponse200Normalizer::class, PeopleIdFullGetResponse200::class => PeopleIdFullGetResponse200Normalizer::class, PeopleIdGetResponse200::class => PeopleIdGetResponse200Normalizer::class, ProducersIdGetResponse200::class => ProducersIdGetResponse200Normalizer::class, ProducersIdFullGetResponse200::class => ProducersIdFullGetResponse200Normalizer::class, RandomAnimeGetResponse200::class => RandomAnimeGetResponse200Normalizer::class, RandomMangaGetResponse200::class => RandomMangaGetResponse200Normalizer::class, RandomCharactersGetResponse200::class => RandomCharactersGetResponse200Normalizer::class, RandomPeopleGetResponse200::class => RandomPeopleGetResponse200Normalizer::class, RandomUsersGetResponse200::class => RandomUsersGetResponse200Normalizer::class, UsersUserbyidIdGetResponse200::class => UsersUserbyidIdGetResponse200Normalizer::class, TopReviewsGetResponse200::class => TopReviewsGetResponse200Normalizer::class, TopReviewsGetResponse200Data::class => TopReviewsGetResponse200DataNormalizer::class, UsersUsernameFullGetResponse200::class => UsersUsernameFullGetResponse200Normalizer::class, UsersUsernameGetResponse200::class => UsersUsernameGetResponse200Normalizer::class, UsersUsernameFavoritesGetResponse200::class => UsersUsernameFavoritesGetResponse200Normalizer::class, UsersUsernameReviewsGetResponse200::class => UsersUsernameReviewsGetResponse200Normalizer::class, UsersUsernameReviewsGetResponse200Data::class => UsersUsernameReviewsGetResponse200DataNormalizer::class, '\\'.Reference::class => '\\'.ReferenceNormalizer::class];

    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && array_key_exists($data::class, $this->normalizers);
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[$object::class];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass): object
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
