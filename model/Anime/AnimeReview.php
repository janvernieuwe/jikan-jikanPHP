<?php

namespace Jikan\Model\Anime;

/**
 * Class AnimeReview
 *
 * @package Jikan\Model
 */
class AnimeReview
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
     * @var int
     */
    private $helpfulCount;

    /**
     * @var \DateTimeImmutable
     */
    private $date;

    /**
     * @var AnimeReviewer
     */
    private $reviewer;

    /**
     * @var string
     */
    private $content;

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
     * @return int
     */
    public function getHelpfulCount(): int
    {
        return $this->helpfulCount;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return AnimeReviewer
     */
    public function getReviewer(): AnimeReviewer
    {
        return $this->reviewer;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
