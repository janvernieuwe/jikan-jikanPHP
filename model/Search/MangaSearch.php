<?php

namespace JikanPHP\Model\Search;

/**
 * Class MangaSearch
 *
 * @package JikanPHP\Model\Search\Search
 */
class MangaSearch
{

    /**
     * @var MangaSearchListItem[]
     */
    private $results;

    /**
     * @var int
     */
    private $lastPage;

    /**
     * @return MangaSearchListItem[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @return int
     */
    public function getLastPage(): int
    {
        return $this->lastPage;
    }
}
