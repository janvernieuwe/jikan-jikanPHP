<?php

namespace JikanPHP\Request\Seasonal;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class SeasonalRequest
 *
 * @package JikanPHP\Request
 */
class SeasonalRequest implements RequestInterface
{
    /**
     * @var ?int
     */
    private $year;

    /**
     * @var ?string
     */
    private $season;

    /**
     * @var bool
     */
    private $later;

    /**
     * SeasonalRequest constructor.
     *
     * @param ?int    $year
     * @param ?string $season
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(?int $year = null, ?string $season = null, bool $later = false)
    {
        if (!\in_array($season, ['winter', 'spring', 'summer', 'fall', null], true)) {
            throw new \InvalidArgumentException(sprintf('Season %s is not valid', $season));
        }

        $this->year = $year;
        $this->season = $season;
        $this->later = $later;
    }

    /**
     * @return string
     */
    public function getPath($baseUrl): string
    {
        if ($this->later) {
            return sprintf('%s/season/later', $baseUrl);
        }

        if (null === $this->year || null === $this->season) {
            return sprintf('%s/season', $baseUrl);
        }

        return sprintf('%s/season/%d/%s', $baseUrl, $this->year, $this->season);
    }
}
