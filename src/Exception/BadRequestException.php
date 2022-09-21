<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Exception;

use RuntimeException;

class BadRequestException extends RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 400);
    }
}
