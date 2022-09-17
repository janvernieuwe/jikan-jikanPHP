<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetClubsSearch extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $type
     *     @var string $category
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jikan\JikanPHP\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/clubs';
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
        $optionsResolver->setDefined(['page', 'limit', 'q', 'type', 'category', 'order_by', 'sort', 'letter']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('q', ['string']);
        $optionsResolver->setAllowedTypes('type', ['string']);
        $optionsResolver->setAllowedTypes('category', ['string']);
        $optionsResolver->setAllowedTypes('order_by', ['string']);
        $optionsResolver->setAllowedTypes('sort', ['string']);
        $optionsResolver->setAllowedTypes('letter', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Jikan\JikanPHP\Exception\GetClubsSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\ClubsSearch
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\ClubsSearch', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetClubsSearchBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
