<?php

namespace Jikan\Model\User;

/**
 * Class Favorites
 *
 * @package Jikan\Model
 */
class Favorites
{

    /**
     * @var array
     */
    private $anime;

    /**
     * @var array
     */
    private $manga;

    /**
     * @var array
     */
    private $characters;

    /**
     * @var array
     */
    private $people;

    /**
     * @return array
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @return array
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * @return array
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @return array
     */
    public function getPeople(): array
    {
        return $this->people;
    }
}
