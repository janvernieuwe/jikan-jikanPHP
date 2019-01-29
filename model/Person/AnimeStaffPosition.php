<?php

namespace Jikan\Model\Person;

use Jikan\Model\Common\AnimeMeta;

/**
 * Class AnimeStaffPosition
 *
 * @package Jikan\Model
 */
class AnimeStaffPosition
{
    /**
     * @var string
     */
    private $position;

    /**
     * @var AnimeMeta
     */
    private $animeMeta;

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return AnimeMeta
     */
    public function getAnimeMeta(): AnimeMeta
    {
        return $this->animeMeta;
    }
}
