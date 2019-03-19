<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaForumRequest
 *
 * @package JikanPHP\Request
 */
class MangaForumRequest implements RequestInterface
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
     * MangaForumRequest constructor.
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
        // TODO: add support for filtering once it's added in the REST API
        return sprintf(Constants::BASE_URL.'/manga/%d/forum', $this->id);
    }
}
