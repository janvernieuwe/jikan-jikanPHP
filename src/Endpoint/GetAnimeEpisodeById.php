<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;
use Jikan\JikanPHP\Exception\GetAnimeEpisodeByIdBadRequestException;
use Jikan\JikanPHP\Model\AnimeIdEpisodesEpisodeGetResponse200;
use Psr\Http\Message\ResponseInterface;
class GetAnimeEpisodeById extends BaseEndpoint implements Endpoint
{
    protected $id;

    protected $episode;

    public function __construct(int $id, int $episode)
    {
        $this->id = $id;
        $this->episode = $episode;
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{episode}'], [$this->id, $this->episode], '/anime/{id}/episodes/{episode}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetAnimeEpisodeByIdBadRequestException
     *
     * @return null|AnimeIdEpisodesEpisodeGetResponse200
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, AnimeIdEpisodesEpisodeGetResponse200::class, 'json');
        }

        if (400 === $status) {
            throw new GetAnimeEpisodeByIdBadRequestException($response);
        }

        return null;
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
