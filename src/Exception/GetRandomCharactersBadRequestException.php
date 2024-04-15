<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Exception;

use Psr\Http\Message\ResponseInterface;

class GetRandomCharactersBadRequestException extends BadRequestException
{
    public function __construct(/**
     * @var ResponseInterface
     */
        private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Error: Bad request. When required parameters were not supplied.');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
