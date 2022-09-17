<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetAnimeForum extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * @param int   $id
     * @param array $queryParameters {
     *
     *     @var string $filter Filter topics
     * }
     */
    public function __construct(int $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Jikan\JikanPHP\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/anime/{id}/forum');
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
        $optionsResolver->setDefined(['filter']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('filter', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeForumBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\Forum
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\Forum', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetAnimeForumBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
