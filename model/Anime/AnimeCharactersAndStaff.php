<?php

namespace Jikan\Model\Anime;

use Jikan\Model\Character\CharacterListItem;

/**
 * Class AnimeCharactersAndStaff
 *
 * @package Jikan\Model
 */
class AnimeCharactersAndStaff
{
    /**
     * @var CharacterListItem[]
     */
    private $characters;

    /**
     * @var StaffListItem[]
     */
    private $staff;

    /**
     * @return \Jikan\Model\Character\CharacterListItem[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @return StaffListItem[]
     */
    public function getStaff(): array
    {
        return $this->staff;
    }
}
