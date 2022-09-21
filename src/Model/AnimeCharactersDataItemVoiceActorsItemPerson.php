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

    public function getMalId(): int
    {
        return $this->malId;
    }

    public function setMalId(int $malId): self
    {
        $this->malId = $malId;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
