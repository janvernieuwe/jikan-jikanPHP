<?php

namespace JikanPHP\Request\Search;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class PersonSearchRequest
 *
 *
 * @package JikanPHP\Request\Search
 */
class PersonSearchRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $query;

    /**
     * @var int
     */
    private $page;

    /**
     * Advanced Search
     */

    /**
     * @var string
     */
    private $char;

    /**
     * PersonSearchRequest constructor.
     *
     * @param string|null $query
     * @param int    $page
     */
    public function __construct(?string $query = null, int $page = 1)
    {
        $this->query = $query;
        $this->page = $page;

        $this->query = $this->query ?? "";
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath($baseUrl): string
    {

        $query = http_build_query(
            [
                'q'      => $this->query,
                'show'   => $this->page,
            //                'letter' => $this->char, // not implemented todo
            ]
        );

        return sprintf('%s/search/people?%s', $baseUrl, $query);
    }

    /**
     * @param null|string $query
     *
     * @return $this
     */
    public function setQuery(?string $query = null): self
    {
        $this->query = $query;
        $this->query = $this->query ?? "";

        return $this;
    }

    /**
     * @param int $page
     *
     * @return $this
     */
    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @param string $char
     *
     * @return $this
     */
    public function setStartsWithChar(string $char): self
    {
        $this->char = $char;

        return $this;
    }
}
