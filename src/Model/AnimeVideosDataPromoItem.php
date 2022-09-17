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
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Youtube Details.
     *
     * @return Trailer
     */
    public function getTrailer(): Trailer
    {
        return $this->trailer;
    }

    /**
     * Youtube Details.
     *
     * @param Trailer $trailer
     *
     * @return self
     */
    public function setTrailer(Trailer $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }
}
