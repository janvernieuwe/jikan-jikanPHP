<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonFull extends \ArrayObject
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
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Person's website URL.
     *
     * @var string|null
     */
    protected $websiteUrl;

    /**
     * @var PeopleImages
     */
    protected $images;

    /**
     * Name.
     *
     * @var string
     */
    protected $name;

    /**
     * Given Name.
     *
     * @var string|null
     */
    protected $givenName;

    /**
     * Family Name.
     *
     * @var string|null
     */
    protected $familyName;

    /**
     * Other Names.
     *
     * @var list<string>
     */
    protected $alternateNames;

    /**
     * Birthday Date ISO8601.
     *
     * @var string|null
     */
    protected $birthday;

    /**
     * Number of users who have favorited this entry.
     *
     * @var int
     */
    protected $favorites;

    /**
     * Biography.
     *
     * @var string|null
     */
    protected $about;

    /**
     * @var list<PersonFullAnimeItem>
     */
    protected $anime;

    /**
     * @var list<PersonFullMangaItem>
     */
    protected $manga;

    /**
     * @var list<PersonFullVoicesItem>
     */
    protected $voices;

    /**
     * MyAnimeList ID.
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     */
    public function setMalId(int $malId): self
    {
        $this->initialized['malId'] = true;
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Person's website URL.
     */
    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    /**
     * Person's website URL.
     */
    public function setWebsiteUrl(?string $websiteUrl): self
    {
        $this->initialized['websiteUrl'] = true;
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    public function getImages(): PeopleImages
    {
        return $this->images;
    }

    public function setImages(PeopleImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Given Name.
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * Given Name.
     */
    public function setGivenName(?string $givenName): self
    {
        $this->initialized['givenName'] = true;
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Family Name.
     */
    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    /**
     * Family Name.
     */
    public function setFamilyName(?string $familyName): self
    {
        $this->initialized['familyName'] = true;
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Other Names.
     *
     * @return list<string>
     */
    public function getAlternateNames(): array
    {
        return $this->alternateNames;
    }

    /**
     * Other Names.
     *
     * @param list<string> $alternateNames
     */
    public function setAlternateNames(array $alternateNames): self
    {
        $this->initialized['alternateNames'] = true;
        $this->alternateNames = $alternateNames;

        return $this;
    }

    /**
     * Birthday Date ISO8601.
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * Birthday Date ISO8601.
     */
    public function setBirthday(?string $birthday): self
    {
        $this->initialized['birthday'] = true;
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Number of users who have favorited this entry.
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * Number of users who have favorited this entry.
     */
    public function setFavorites(int $favorites): self
    {
        $this->initialized['favorites'] = true;
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Biography.
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * Biography.
     */
    public function setAbout(?string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }

    /**
     * @return list<PersonFullAnimeItem>
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @param list<PersonFullAnimeItem> $anime
     */
    public function setAnime(array $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }

    /**
     * @return list<PersonFullMangaItem>
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * @param list<PersonFullMangaItem> $manga
     */
    public function setManga(array $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }

    /**
     * @return list<PersonFullVoicesItem>
     */
    public function getVoices(): array
    {
        return $this->voices;
    }

    /**
     * @param list<PersonFullVoicesItem> $voices
     */
    public function setVoices(array $voices): self
    {
        $this->initialized['voices'] = true;
        $this->voices = $voices;

        return $this;
    }
}
