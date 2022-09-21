<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetUserHistoryBadRequestException;
use Jikan\JikanPHP\Model\UserHistory;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetUserHistory extends BaseEndpoint implements Endpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var string $type
     * }
     */
    public function __construct(protected string $username, array $queryParameters = [])
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
        return str_replace(['{username}'], [$this->username], '/users/{username}/history');
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
        $optionsResolver->setDefined(['type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('type', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetUserHistoryBadRequestException
     *
     * @return null|UserHistory
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, UserHistory::class, 'json');
        }

        if (400 === $status) {
            throw new GetUserHistoryBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
