<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetAnimeUserUpdatesBadRequestException;
use Jikan\JikanPHP\Model\AnimeUserupdates;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetAnimeUserUpdates extends BaseEndpoint implements Endpoint
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
        return str_replace(['{id}'], [$this->id], '/anime/{id}/userupdates');
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
     * @throws GetAnimeUserUpdatesBadRequestException
     *
     * @return null|AnimeUserupdates
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, AnimeUserupdates::class, 'json');
        }

        if (400 === $status) {
            throw new GetAnimeUserUpdatesBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
