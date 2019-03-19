<?php

namespace JikanPHP\Request\SeasonList;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class SeasonListRequest
 *
 * @package JikanPHP\Request\SeasonListItem
 */
class SeasonListRequest implements RequestInterface
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return Constants::BASE_URL.'/season/archive';
    }
}
