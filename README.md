[![Latest Stable Version](https://poser.pugx.org/jikan/jikan-php/v/stable)](https://packagist.org/packages/jikan/jikan-php)
[![Total Downloads](https://poser.pugx.org/jikan/jikan-php/downloads)](https://packagist.org/packages/jikan/jikan-php)
[![License](https://poser.pugx.org/jikan/jikan-php/license)](https://packagist.org/packages/jikan/jikan-php)

# jikan-jikanPHP
[Jikan rest](https://github.com/jikan-me/jikan) api PHP client, PHP Client for the unofficial myanimelist api, generated using janePHP.

Install it with composer:

```
composer require jikan/jikan-php
```

# Getting Started

## Require your client implementation
For example
```sh
 composer require php-http/guzzle7-adapter
```
For more clients & adapters check https://docs.php-http.org/en/latest/clients.html

## Instantiate the client

```php
$jikan = Client::create();
```

## Use it to request MAL data
Check the client for the correct type hint
```php
/** @var AnimeIdGetResponse200 $response */
$response = $jikan->getAnimeById(5114);
$anime = $response->getData();
```

If you experience any issues, open an issue, or even better a Pull Request!

# Contribute
Has jikan been updated?
You can update the client by using this command:
```shell
composer update-jikan
```
Then make a PR to merge it into the master branch.
