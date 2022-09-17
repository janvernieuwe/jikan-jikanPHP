<?php declare(strict_types=1);

use Jikan\JikanPHP\Client;
use Jikan\JikanPHP\Model\AnimeIdGetResponse200;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function test_it_gets_anime(): void
    {
        self::markTestSkipped('will perform actual request');
        $jikan = Client::create();
        /** @var AnimeIdGetResponse200 $anime */
        $anime = $jikan->getAnimeById(5114);
        self::assertEquals('Fullmetal Alchemist: Brotherhood', $anime->getData()->getTitle());
    }
}
