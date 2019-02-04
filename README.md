[![Latest Stable Version](https://poser.pugx.org/jikan/jikan-php/v/stable)](https://packagist.org/packages/jikan/jikan-php)
[![Total Downloads](https://poser.pugx.org/jikan/jikan-php/downloads)](https://packagist.org/packages/jikan/jikan-php)
[![License](https://poser.pugx.org/jikan/jikan-php/license)](https://packagist.org/packages/jikan/jikan-php)

# jikan-jikanPHP
[Jikan rest](https://github.com/jikan-me/jikan) api PHP client, PHP Client for the unofficial myanimelist api

Install it with composer:

```
composer require jikan/jikan-php
```

# Getting Started

## Instantiate the client

```php
$jikan = new \Jikan\JikanPHP\JikanPHPClient();
```

## Use it to request MAL data

```php
$request = new Request\Anime\AnimeRequest(1);
$anime = $this->jikan->getAnime($request);
```

All responses are converted to PHP classes.

# Customize guzzle

```php
$guzzle = new GuzzleHttp\Client();
// Add middlewares to the client, or configs
$jikan = new \Jikan\JikanPHP\JikanPHPClient($guzzle);
// The configured client is now used internally
```

Using the client should be self-explanatory since it is fully type-hinted.

If you experience any issues, open an issue, or even better a Pull Request!
