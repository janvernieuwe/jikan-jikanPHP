<?php

namespace Jikan\JikanPHP;

use Jikan\JikanPHP\Serializer\SerializerFactory;
use Jikan\Request;
use JMS\Serializer\Serializer;

/**
 * Class JikanPHPClient
 *
 * @package Jikan\JikanPHP
 */
class JikanPHPClient
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
     * JikanPHPClient constructor.
     *
     * @param \GuzzleHttp\Client|null $guzzle
     */
    public function __construct(\GuzzleHttp\Client $guzzle = null)
    {
        $this->guzzle = $guzzle ?? new \GuzzleHttp\Client();
        $this->serializer = SerializerFactory::create();
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
