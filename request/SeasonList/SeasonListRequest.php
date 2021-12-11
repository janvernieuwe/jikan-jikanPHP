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
    public function getPath($baseUrl): string
    {
        return sprintf('%s/season/archive', $baseUrl);
    }
}
