<?php

namespace JikanPHP\Model\Anime;

use JikanPHP\Model\Character\CharacterListItem;

/**
 * Class AnimeCharactersAndStaff
 *
 * @package JikanPHP\Model
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
     * @return \JikanPHP\Model\Character\CharacterListItem[]
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
