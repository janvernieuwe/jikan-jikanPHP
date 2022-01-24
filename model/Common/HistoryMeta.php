<?php

namespace JikanPHP\Model\Common;

/**
 * Class HistoryMeta
 *
 * @package JikanPHP\Model
 */
class HistoryMeta
{

    /**
     * @var string
     */
    private $url;

    /**
     * @var int
     */
    private $malId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
