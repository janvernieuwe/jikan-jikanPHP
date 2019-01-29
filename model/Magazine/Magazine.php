<?php

namespace Jikan\Model\Magazine;

use Jikan\Model\Common\MalUrl;

/**
 * Class Magazine
 *
 * @package Jikan\Model
 */
class Magazine
{

    /**
     * @var \Jikan\Model\Common\MalUrl
     */
    public $malUrl;

    /**
     * @var array|MagazineManga[]
     */
    public $manga = [];

    /**
     * @return \Jikan\Model\Common\MalUrl
     */
    public function getMalUrl(): MalUrl
    {
        return $this->malUrl;
    }

    /**
     * @return array|MagazineManga[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }
}
