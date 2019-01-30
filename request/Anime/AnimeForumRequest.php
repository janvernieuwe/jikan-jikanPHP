<?php

namespace Jikan\Request\Anime;

use Jikan\Request\RequestInterface;

/**
 * Class AnimeForumRequest
 *
 * @package Jikan\Request
 */
class AnimeForumRequest implements RequestInterface
{
    /**
     * @var array
     */
    private static $validTypes = ['all', 'episode', 'other'];

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $topic;

    /**
     * AnimeForumRequest constructor.
     *
     * @param int         $id
     * @param string|null $topic
     */
    public function __construct(int $id, ?string $topic = null)
    {
        $this->id = $id;
        $this->topic = $topic;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        $query = '';
        if ($this->topic !== null && \in_array($this->topic, self::$validTypes, true)) {
            $query = '?'.http_build_query(['topic' => $this->topic]);
        }

        // TODO: add support for filtering once it's added in the REST API
        return sprintf(Constants::BASE_URL.'/anime/%s/forum', $this->id);
    }
}
