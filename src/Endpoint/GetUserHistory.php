<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetUserHistory extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    protected $username;

    /**
     * @param string $username
     * @param array  $queryParameters {
     *
     *     @var string $type
     * }
     */
    public function __construct(string $username, array $queryParameters = [])
    {
        $this->username = $username;
        $this->queryParameters = $queryParameters;
    }
    use \Jikan\JikanPHP\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{username}'], [$this->username], '/users/{username}/history');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * @throws \Jikan\JikanPHP\Exception\GetUserHistoryBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\UserHistory
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\UserHistory', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetUserHistoryBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}