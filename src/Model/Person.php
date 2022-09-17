<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Person
{
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
     * @var string[]
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
     * MyAnimeList ID.
     *
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     *
     * @param int $malId
     *
     * @return self
     */
    public function setMalId(int $malId): self
    {
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Person's website URL.
     *
     * @return string|null
     */
    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    /**
     * Person's website URL.
     *
     * @param string|null $websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl(?string $websiteUrl): self
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * @return PeopleImages
     */
    public function getImages(): PeopleImages
    {
        return $this->images;
    }

    /**
     * @param PeopleImages $images
     *
     * @return self
     */
    public function setImages(PeopleImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Given Name.
     *
     * @return string|null
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * Given Name.
     *
     * @param string|null $givenName
     *
     * @return self
     */
    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Family Name.
     *
     * @return string|null
     */
    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    /**
     * Family Name.
     *
     * @param string|null $familyName
     *
     * @return self
     */
    public function setFamilyName(?string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Other Names.
     *
     * @return string[]
     */
    public function getAlternateNames(): array
    {
        return $this->alternateNames;
    }

    /**
     * Other Names.
     *
     * @param string[] $alternateNames
     *
     * @return self
     */
    public function setAlternateNames(array $alternateNames): self
    {
        $this->alternateNames = $alternateNames;

        return $this;
    }

    /**
     * Birthday Date ISO8601.
     *
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * Birthday Date ISO8601.
     *
     * @param string|null $birthday
     *
     * @return self
     */
    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Number of users who have favorited this entry.
     *
     * @return int
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * Number of users who have favorited this entry.
     *
     * @param int $favorites
     *
     * @return self
     */
    public function setFavorites(int $favorites): self
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Biography.
     *
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * Biography.
     *
     * @param string|null $about
     *
     * @return self
     */
    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }
}
