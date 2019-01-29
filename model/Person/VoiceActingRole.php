<?php

namespace Jikan\Model\Person;

use Jikan\Model\Common\AnimeMeta;
use Jikan\Model\Common\CharacterMeta;

/**
 * Class VoiceActingRole
 *
 * @package Jikan\Model
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
