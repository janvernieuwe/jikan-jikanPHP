<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetMangaSearchBadRequestException;
use Jikan\JikanPHP\Model\MangaSearch;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetMangaSearch extends BaseEndpoint implements Endpoint
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
     *     @var bool $sfw Filter out Adult entries
     *     @var string $genres Filter by genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $genres_exclude Exclude genre(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $order_by
     *     @var string $sort
     *     @var string $letter Return entries starting with the given letter
     *     @var string $magazines Filter by magazine(s) IDs. Can pass multiple with a comma as a delimiter. e.g 1,2,3
     *     @var string $start_date Filter by starting date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
     *     @var string $end_date Filter by ending date. Format: YYYY-MM-DD. e.g `2022`, `2005-05`, `2005-01-01`
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
        return '/manga';
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
        $optionsResolver->setDefined(['page', 'limit', 'q', 'type', 'score', 'min_score', 'max_score', 'status', 'sfw', 'genres', 'genres_exclude', 'order_by', 'sort', 'letter', 'magazines', 'start_date', 'end_date']);
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
        $optionsResolver->setAllowedTypes('sfw', ['bool']);
        $optionsResolver->setAllowedTypes('genres', ['string']);
        $optionsResolver->setAllowedTypes('genres_exclude', ['string']);
        $optionsResolver->setAllowedTypes('order_by', ['string']);
        $optionsResolver->setAllowedTypes('sort', ['string']);
        $optionsResolver->setAllowedTypes('letter', ['string']);
        $optionsResolver->setAllowedTypes('magazines', ['string']);
        $optionsResolver->setAllowedTypes('start_date', ['string']);
        $optionsResolver->setAllowedTypes('end_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetMangaSearchBadRequestException
     *
     * @return null|MangaSearch
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, MangaSearch::class, 'json');
        }

        if (400 === $status) {
            throw new GetMangaSearchBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
