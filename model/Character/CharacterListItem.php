<?php

namespace Jikan\Model\Character;

/**
 * Class CharacterParser
 *
 * @package Jikan\Model
 */
class CharacterListItem
{
    /**
     * @var int
     */
    public $malId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var VoiceActor[]
     */
    public $voiceActors = [];

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return VoiceActor[]
     */
    public function getVoiceActors(): array
    {
        return $this->voiceActors;
    }
}
