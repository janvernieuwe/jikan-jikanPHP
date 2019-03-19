<?php

namespace JikanPHP\Request;

/**
 * Interface RequestInterface
 *
 * @package JikanPHP\Request
 */
interface RequestInterface
{
    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath(): string;
}
