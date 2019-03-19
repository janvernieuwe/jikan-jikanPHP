<?php

namespace JikanPHP\Request\Schedule;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class ScheduleRequest
 *
 * @package JikanPHP\Request
 */
class ScheduleRequest implements RequestInterface
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return Constants::BASE_URL.'/schedule';
    }
}
