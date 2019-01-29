<?php

namespace Jikan\Model\Character;

/**
 * Class VoiceActors
 *
 * @package Jikan\Model
 */
class VoiceActor
{
    /**
     * @var int
     */
    private $malId;

    /**
     * @var string
     */
    private $name;

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
    private $language;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return string
     */
    public function getName(): string
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
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
}
