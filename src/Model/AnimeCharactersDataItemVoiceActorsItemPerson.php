<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharactersDataItemVoiceActorsItemPerson
{
    /**
     * @var int
     */
    protected $malId;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var PeopleImages
     */
    protected $images;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
