<?php

namespace Jikan\Request\SeasonList;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class SeasonListRequest
 *
 * @package Jikan\Request\SeasonListItem
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
