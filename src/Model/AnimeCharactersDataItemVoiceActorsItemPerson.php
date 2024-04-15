<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharactersDataItemVoiceActorsItemPerson extends \ArrayObject
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
        $this->initialized['malId'] = true;
        $this->malId = $malId;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
