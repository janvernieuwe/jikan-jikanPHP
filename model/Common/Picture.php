<?php

namespace JikanPHP\Model\Common;

/**
 * Class Picture
 *
 * @package JikanPHP\Model
 */
class Picture
{
    /**
     * @var string
     */
    private $large;

    /**
     * @var string
     */
    private $small;

    /**
     * @return string
     */
    public function getLarge(): string
    {
        return $this->large;
    }

    /**
     * @return string
     */
    public function getSmall(): string
    {
        return $this->small;
    }
}
