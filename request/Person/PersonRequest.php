<?php

namespace JikanPHP\Request\Person;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class PersonRequest
 *
 * @package JikanPHP\Request
 */
class PersonRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * PersonRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/person/%d', $baseUrl, $this->id);
    }
}
