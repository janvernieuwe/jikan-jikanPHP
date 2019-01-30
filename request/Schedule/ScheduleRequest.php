<?php

namespace Jikan\Request\Schedule;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class ScheduleRequest
 *
 * @package Jikan\Request
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
