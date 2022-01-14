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
     * @param string $baseUrl
     * 
     * @return string
     */
    public function getPath(string $baseUrl): string;
}
