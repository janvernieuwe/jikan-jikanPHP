<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetClubsSearchBadRequestException;
use Jikan\JikanPHP\Model\ClubsSearch;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetClubsSearch extends BaseEndpoint implements Endpoint
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

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/clubs';
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
     * @throws GetClubsSearchBadRequestException
     *
     * @return null|ClubsSearch
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, ClubsSearch::class, 'json');
        }

        if (400 === $status) {
            throw new GetClubsSearchBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
