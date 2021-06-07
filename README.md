# Laravel Json Response

Automatically always return a response in JSON format

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![License][badge_license]][link_license]


## Installation

To get the latest version of `Laravel Json Response`, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require andrey-helldar/laravel-json-response
```

Or manually update `require` block of `composer.json` and run `composer update`.

```json
{
    "require": {
        "andrey-helldar/laravel-json-response": "^1.0"
    }
}
```

## Using

After you've installed the package via composer, you're done. There's no step two.

This package will automatically register the `Helldar\LaravelJsonResponse\Middlewares\SetHeaderMiddleware` middleware in the `web` and `api` groups, if they
exist. The middleware will add a header `Accept` that will effectively convert all responses to JSON format. This header will apply to all replies.


[badge_downloads]:      https://img.shields.io/packagist/dt/andrey-helldar/laravel-json-response.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/andrey-helldar/laravel-json-response.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/andrey-helldar/laravel-json-response?label=stable&style=flat-square

[badge_unstable]:       https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/andrey-helldar/laravel-json-response
