<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetAnimeSearch extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var int $page
     *     @var int $limit
     *     @var string $q
     *     @var string $type
     *     @var float $score
     *     @var float $min_score set a minimum score for results
     *     @var float $max_score Set a maximum score for results
     *     @var string $status
     *     @var string $rating
     *     @var bool $sfw Filter out Adult entries
     *     @var string $genres Filter by genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $genres_exclude Exclude genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     *     @var string $producers Filter by producer(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $start_date Filter by starting date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     *     @var string $end_date Filter by ending date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
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
        return '/anime';
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
        $optionsResolver->setDefined(['page', 'limit', 'q', 'type', 'score', 'min_score', 'max_score', 'status', 'rating', 'sfw', 'genres', 'genres_exclude', 'order_by', 'sort', 'letter', 'producers', 'start_date', 'end_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('q', ['string']);
        $optionsResolver->setAllowedTypes('type', ['string']);
        $optionsResolver->setAllowedTypes('score', ['float']);
        $optionsResolver->setAllowedTypes('min_score', ['float']);
        $optionsResolver->setAllowedTypes('max_score', ['float']);
        $optionsResolver->setAllowedTypes('status', ['string']);
        $optionsResolver->setAllowedTypes('rating', ['string']);
        $optionsResolver->setAllowedTypes('sfw', ['bool']);
        $optionsResolver->setAllowedTypes('genres', ['string']);
        $optionsResolver->setAllowedTypes('genres_exclude', ['string']);
        $optionsResolver->setAllowedTypes('order_by', ['string']);
        $optionsResolver->setAllowedTypes('sort', ['string']);
        $optionsResolver->setAllowedTypes('letter', ['string']);
        $optionsResolver->setAllowedTypes('producers', ['string']);
        $optionsResolver->setAllowedTypes('start_date', ['string']);
        $optionsResolver->setAllowedTypes('end_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeSearchBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\AnimeSearch', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetAnimeSearchBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
