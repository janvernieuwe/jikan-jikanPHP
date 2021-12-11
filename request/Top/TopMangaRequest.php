<?php

namespace JikanPHP\Request\Top;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class TopMangaRequest
 *
 * @package JikanPHP\Request\Top
 */
class TopMangaRequest implements RequestInterface
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
                    Constants::TOP_MANGA,
                    Constants::TOP_NOVEL,
                    Constants::TOP_ONE_SHOT,
                    Constants::TOP_DOUJINSHI,
                    Constants::TOP_MANHWA,
                    Constants::TOP_MANHUA,
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
        return sprintf('%s/top/manga/%d/%s', $baseUrl, $this->page, $this->type);
    }
}
