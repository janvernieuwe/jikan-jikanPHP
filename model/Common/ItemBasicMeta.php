<?php

namespace JikanPHP\Model\Common;

/**
 * Class ItemBasicMeta
 *
 * @package JikanPHP\Model
 */
class ItemBasicMeta
{
    /**
     * @var int
     */
    private $malId;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
