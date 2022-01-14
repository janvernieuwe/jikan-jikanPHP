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
    public function getPath($baseUrl): string
    {
        return sprintf('%s/schedule', $baseUrl);
    }
}
