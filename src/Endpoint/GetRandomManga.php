<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetRandomManga extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    use \Jikan\JikanPHP\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/random/manga';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Jikan\JikanPHP\Exception\GetRandomMangaBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\RandomMangaGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\RandomMangaGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetRandomMangaBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
