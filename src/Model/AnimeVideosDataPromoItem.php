<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosDataPromoItem
{
    /**
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Youtube Details.
     *
     * @var Trailer
     */
    protected $trailer;

    /**
     * Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Youtube Details.
     */
    public function getTrailer(): Trailer
    {
        return $this->trailer;
    }

    /**
     * Youtube Details.
     */
    public function setTrailer(Trailer $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }
}
