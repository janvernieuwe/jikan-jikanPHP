<?php

namespace JikanPHP\Model\Search;

/**
 * Class AnimeSearch
 *
 * @package JikanPHP\Model\Search\Search
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
