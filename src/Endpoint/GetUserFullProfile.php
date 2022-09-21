<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetUserFullProfileBadRequestException;
use Jikan\JikanPHP\Model\UsersUsernameFullGetResponse200;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class GetUserFullProfile extends BaseEndpoint implements Endpoint
{
    public function __construct(protected string $username)
    {
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{username}'], [$this->username], '/users/{username}/full');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetUserFullProfileBadRequestException
     *
     * @return null|UsersUsernameFullGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, UsersUsernameFullGetResponse200::class, 'json');
        }

        if (400 === $status) {
            throw new GetUserFullProfileBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
