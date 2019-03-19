<?php

namespace JikanPHP\Model\Common;

/**
 * Class Recommendation
 *
 * @package JikanPHP\Model\Common
 */
class Recommendation
{

    /**
     * @var int
     */
    private $malId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $recommendationUrl;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $recommendationCount;

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
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getRecommendationUrl(): string
    {
        return $this->recommendationUrl;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getRecommendationCount(): int
    {
        return $this->recommendationCount;
    }
}
