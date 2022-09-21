<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetMangaUserUpdatesBadRequestException;
use Jikan\JikanPHP\Model\MangaUserupdates;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetMangaUserUpdates extends BaseEndpoint implements Endpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     * }
     */
    public function __construct(protected int $id, array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/manga/{id}/userupdates');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetMangaUserUpdatesBadRequestException
     *
     * @return null|MangaUserupdates
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, MangaUserupdates::class, 'json');
        }

        if (400 === $status) {
            throw new GetMangaUserUpdatesBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
