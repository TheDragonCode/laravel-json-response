# Laravel Json Response

<img src="https://preview.dragon-code.pro/TheDragonCode/json-response.svg?brand=laravel" alt="Laravel Json Response"/>

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![Github Workflow Status][badge_build]][link_build]
[![License][badge_license]][link_license]

> Automatically always return a response in JSON format

## Installation

To get the latest version of `Laravel Json Response`, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require dragon-code/laravel-json-response
```

Or manually update `require` block of `composer.json` and run `composer update`.

```json
{
    "require": {
        "dragon-code/laravel-json-response": "^1.0"
    }
}
```

### Upgrade from `andrey-helldar/laravel-json-response`

1. Replace `"andrey-helldar/laravel-json-response": "^1.0"` with `"dragon-code/laravel-json-response": "^2.0"` in the `composer.json` file;
4. Call the `composer update` console command.

## Using

After you've installed the package via composer, you're done. There's no step two.

This package will automatically register the `DragonCode\LaravelJsonResponse\Middlewares\SetHeaderMiddleware` middleware in the `web` and `api` groups, if they
exist. The middleware will add a header `Accept` that will effectively convert all responses to JSON format. This header will apply to all responses.


[badge_build]:          https://img.shields.io/github/workflow/status/dragon-code/laravel-json-response/phpunit?style=flat-square

[badge_downloads]:      https://img.shields.io/packagist/dt/dragon-code/laravel-json-response.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/dragon-code/laravel-json-response.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/dragon-code/laravel-json-response?label=stable&style=flat-square

[badge_unstable]:       https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_build]:           https://github.com/dragon-code/laravel-json-response/actions

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/dragon-code/laravel-json-response
