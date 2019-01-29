<?php

namespace Jikan\Model\Search;

/**
 * Class AnimeSearch
 *
 * @package Jikan\Model\Search\Search
 */
class AnimeSearch
{

    /**
     * @var AnimeSearchListItem[]
     */
    private $results;

    /**
     * @var int
     */
    private $lastPage;

    /**
     * @return AnimeSearchListItem[]
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
