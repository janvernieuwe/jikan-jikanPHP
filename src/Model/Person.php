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
    protected $alternateNames = [];

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
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    public function getImages(): PeopleImages
    {
        return $this->images;
    }

    public function setImages(PeopleImages $peopleImages): self
    {
        $this->images = $peopleImages;

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
     */
    public function setAlternateNames(array $alternateNames): self
    {
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
        $this->about = $about;

        return $this;
    }
}
