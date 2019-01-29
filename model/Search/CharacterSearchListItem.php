<?php

namespace Jikan\Model\Search;

/**
 * Class CharacterSearchListItem
 *
 * @package Jikan\Model\Search\Search
 */
class CharacterSearchListItem
{

    /**
     * @var int
     */
    private $malId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $alternativeNames;

    /**
     * @var \Jikan\Model\Common\MalUrl[]
     */
    private $anime;

    /**
     * @var \Jikan\Model\Common\MalUrl[]
     */
    private $manga;

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getAlternativeNames(): array
    {
        return $this->alternativeNames;
    }

    /**
     * @return \Jikan\Model\Common\MalUrl[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @return \Jikan\Model\Common\MalUrl[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }
}
