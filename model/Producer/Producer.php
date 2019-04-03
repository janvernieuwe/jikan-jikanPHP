<?php

namespace JikanPHP\Model\Producer;

use JikanPHP\Model\Common\MalUrl;

/**
 * Class Producer
 *
 * @package JikanPHP\Model
 */
class Producer
{

    /**
     * @var MalUrl
     */
    public $malUrl;

    /**
     * @var ProducerAnime[]
     */
    public $anime = [];

    /**
     * @return MalUrl
     */
    public function getMalUrl(): MalUrl
    {
        return $this->malUrl;
    }

    /**
     * @return ProducerAnime[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }
}
