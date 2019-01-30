<?php

namespace Jikan\Request\Manga;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MangaRecommendationsRequest
 *
 * @package Jikan\Request
 */
class MangaRecommendationsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaRecommendationsRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/manga/%d/recommendations', $this->id);
    }
}
