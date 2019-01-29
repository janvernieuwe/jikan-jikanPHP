<?php

namespace Jikan\Model\Search;

/**
 * Class MangaSearch
 *
 * @package Jikan\Model\Search\Search
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
