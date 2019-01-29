<?php

namespace Jikan\Model\Anime;

/**
 * Class CharacterParser
 *
 * @package Jikan\Model
 */
class StaffListItem
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
    public $name;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string[]
     */
    public $positions = [];

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
    public function getName(): string
    {
        return $this->name;
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
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }
}
