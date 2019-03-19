<?php

namespace JikanPHP\Model\Anime;

/**
 * Class Episodes
 *
 * @package JikanPHP\Model
 */
class Episodes
{
    /**
     * @var int
     */
    private $episodesLastPage;

    /**
     * @var EpisodeListItem[]
     */
    private $episodes;

    /**
     * @return EpisodeListItem[]
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * @return int
     */
    public function getEpisodesLastPage(): int
    {
        return $this->episodesLastPage;
    }
}
