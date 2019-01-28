<?php

namespace JikanPHP\Test;

use Jikan\JikanPHP\JikanPHPClient;
use Jikan\Model\Anime\Anime;
use Jikan\Request\Anime\AnimeRequest;
use PHPUnit\Framework\TestCase;

class JikanPHPTest extends TestCase
{
    /**
     * @var JikanPHPClient
     */
    private $jikan;

    public function setUp()
    {
        echo __FUNCTION__;
        $this->jikan = new JikanPHPClient();
    }

    /**
     * @test
     */
    public function it_gets_anime()
    {
        echo __FUNCTION__;
        $request = new AnimeRequest(1);
        $anime = $this->jikan->getAnime($request);
        var_dump($anime);
        self::assertInstanceOf(Anime::class, $anime);
    }
}
