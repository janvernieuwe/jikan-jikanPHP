<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaRecommendationsRequest
 *
 * @package JikanPHP\Request
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
    public function getPath($baseUrl): string
    {
        return sprintf('%s/manga/%d/recommendations', $baseUrl, $this->id);
    }
}
