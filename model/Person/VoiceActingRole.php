<?php

namespace JikanPHP\Model\Person;

use JikanPHP\Model\Common\AnimeMeta;
use JikanPHP\Model\Common\CharacterMeta;

/**
 * Class VoiceActingRole
 *
 * @package JikanPHP\Model
 */
class VoiceActingRole
{
    /**
     * @var string
     */
    private $role;

    /**
     * @var AnimeMeta
     */
    private $animeMeta;

    /**
     * @var CharacterMeta
     */
    private $characterMeta;

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return AnimeMeta
     */
    public function getAnimeMeta(): AnimeMeta
    {
        return $this->animeMeta;
    }

    /**
     * @return CharacterMeta
     */
    public function getCharacterMeta(): CharacterMeta
    {
        return $this->characterMeta;
    }
}
