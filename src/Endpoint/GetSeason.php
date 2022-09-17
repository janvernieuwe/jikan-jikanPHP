<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetSeason extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    protected $year;
    protected $season;

    /**
     * @param int    $year
     * @param string $season
     * @param array  $queryParameters {
     *
     *     @var int $page
     * }
     */
    public function __construct(int $year, string $season, array $queryParameters = [])
    {
        $this->year = $year;
        $this->season = $season;
        $this->queryParameters = $queryParameters;
    }
    use \Jikan\JikanPHP\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{year}', '{season}'], [$this->year, $this->season], '/seasons/{year}/{season}');
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
        $optionsResolver->setDefined(['page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Jikan\JikanPHP\Exception\GetSeasonBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeSearch
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\AnimeSearch', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetSeasonBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
