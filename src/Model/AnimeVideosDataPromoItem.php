<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosDataPromoItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Youtube Details.
     *
     * @var array<string, mixed>
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
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Youtube Details.
     *
     * @return array<string, mixed>
     */
    public function getTrailer(): iterable
    {
        return $this->trailer;
    }

    /**
     * Youtube Details.
     *
     * @param array<string, mixed> $trailer
     */
    public function setTrailer(iterable $trailer): self
    {
        $this->initialized['trailer'] = true;
        $this->trailer = $trailer;

        return $this;
    }
}
