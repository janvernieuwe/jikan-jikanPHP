<?php

namespace Jikan\JikanPHP;

use Jikan\Request;
use JMS\Serializer\Serializer;

class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * Client constructor.
     *
     * @param \GuzzleHttp\Client|null $guzzle
     */
    public function __construct(\GuzzleHttp\Client $guzzle = null)
    {
        $this->guzzle = $guzzle ?? new \GuzzleHttp\Client();
    }

    /**
     * @param Request\Anime\AnimeRequest $request
     *
     * @return \Jikan\Model\Anime\Anime
     */
    public function getAnime(Request\Anime\AnimeRequest $request): \Jikan\Model\Anime\Anime
    {
        $response = $this->guzzle->get($request->getPath());

        return $this->serializer->deserialize(
            (string)$response->getBody()->getContents(),
            \Jikan\Model\Anime\Anime::class,
            'json'
        );
    }
}
