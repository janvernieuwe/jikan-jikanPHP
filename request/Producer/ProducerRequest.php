<?php

namespace Jikan\Request\Producer;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class ProducerRequest
 *
 * @package Jikan\Request
 */
class ProducerRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $page;

    /**
     * ProducerRequest constructor.
     *
     * @param int $id
     * @param int $page
     *
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/producer/%d/%d', $this->id, $this->page);
    }
}
