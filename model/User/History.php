<?php

namespace JikanPHP\Model\User;

use JikanPHP\Model\Common\HistoryMeta;

/**
 * Class History
 *
 * @package JikanPHP\Model
 */
class History
{
    /**
     * @var HistoryMeta
     */
    private HistoryMeta $meta;

    /**
     * @var int
     */
    private $increment;

    /**
     * @var \DateTimeImmutable
     */
    private $date;

    /**
     * @return int
     */
    public function getIncrement(): int
    {
        return $this->increment;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return HistoryMeta
     */
    public function getMeta(): HistoryMeta
    {
        return $this->meta;
    }
}
