<?php

namespace JikanPHP\Model\Person;

use JikanPHP\Model\Common\MangaMeta;

/**
 * Class PublishedManga
 *
 * @package JikanPHP\Model
 */
class PublishedManga
{
    /**
     * @var string
     */
    private $position;

    /**
     * @var mangaMeta
     */
    private $mangaMeta;

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return mangaMeta
     */
    public function getMangaMeta(): MangaMeta
    {
        return $this->mangaMeta;
    }
}
