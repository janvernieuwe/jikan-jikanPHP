<?php

namespace JikanPHP\Model\Person;

use JikanPHP\Model\Common\AnimeMeta;

/**
 * Class AnimeStaffPosition
 *
 * @package JikanPHP\Model
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
