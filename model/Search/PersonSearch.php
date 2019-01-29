<?php

namespace Jikan\Model\Search;

/**
 * Class PersonSearch
 *
 * @package Jikan\Model\Search\Search
 */
class PersonSearch
{

    /**
     * @var PersonSearchListItem[]
     */
    private $results;

    /**
     * @var int
     */
    private $lastPage;

    /**
     * @return PersonSearchListItem[]
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
