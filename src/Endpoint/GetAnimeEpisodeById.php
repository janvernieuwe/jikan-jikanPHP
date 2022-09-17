<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

class GetAnimeEpisodeById extends \Jikan\JikanPHP\Runtime\Client\BaseEndpoint implements \Jikan\JikanPHP\Runtime\Client\Endpoint
{
    protected $id;
    protected $episode;

    /**
     * @param int $id
     * @param int $episode
     */
    public function __construct(int $id, int $episode)
    {
        $this->id = $id;
        $this->episode = $episode;
    }
    use \Jikan\JikanPHP\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{episode}'], [$this->id, $this->episode], '/anime/{id}/episodes/{episode}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Jikan\JikanPHP\Exception\GetAnimeEpisodeByIdBadRequestException
     *
     * @return null|\Jikan\JikanPHP\Model\AnimeIdEpisodesEpisodeGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Jikan\\JikanPHP\\Model\\AnimeIdEpisodesEpisodeGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Jikan\JikanPHP\Exception\GetAnimeEpisodeByIdBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
