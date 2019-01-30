<?php

namespace Jikan\Request\Anime;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeRecommendationsRequest
 *
 * @package Jikan\Request
 */
class AnimeRecommendationsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeRecommendationsRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%s/recommendations', $this->id);
    }
}
