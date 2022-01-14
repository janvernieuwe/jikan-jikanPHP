<?php

namespace JikanPHP\Request\Top;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class TopAnimeRequest
 *
 * @package JikanPHP\Request\Top
 */
class TopAnimeRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var string|null
     */
    private $type;

    /**
     * TopAnimeRequest constructor.
     *
     * @param int  $page
     * @param null $type
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(int $page = 1, $type = null)
    {
        $this->page = $page;

        if (null !== $type) {
            if (!\in_array(
                $type,
                [
                    Constants::TOP_AIRING,
                    Constants::TOP_UPCOMING,
                    Constants::TOP_TV,
                    Constants::TOP_MOVIE,
                    Constants::TOP_OVA,
                    Constants::TOP_SPECIAL,
                    Constants::TOP_BY_POPULARITY,
                    Constants::TOP_BY_FAVORITES,
                ],
                true
            )) {
                throw new \InvalidArgumentException(sprintf('Type %s is not valid', $type));
            }

            $this->type = $type;
        }
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/top/anime/%d/%s', $baseUrl, $this->page, $this->type);
    }
}
