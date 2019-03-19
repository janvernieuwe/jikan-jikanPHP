<?php

namespace JikanPHP\Model\Magazine;

use JikanPHP\Model\Common\MalUrl;

/**
 * Class Magazine
 *
 * @package JikanPHP\Model
 */
class Magazine
{

    /**
     * @var \JikanPHP\Model\Common\MalUrl
     */
    public $malUrl;

    /**
     * @var array|MagazineManga[]
     */
    public $manga = [];

    /**
     * @return \JikanPHP\Model\Common\MalUrl
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
