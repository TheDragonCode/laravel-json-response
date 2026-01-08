# Json Response for Laravel

<img src="https://banners.beyondco.de/JSON%20Response.png?theme=light&packageManager=composer+require&packageName=dragon-code%2Flaravel-json-response&pattern=topography&style=style_2&description=by+The+Dragon+Code&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" alt="Json Response for Laravel"/>

[![Stable Version][badge_stable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![Github Workflow Status][badge_build]][link_build]
[![License][badge_license]][link_license]

> Automatically always return a response in JSON format

## Installation

### Compatibility

| PHP                               | Laravel                  | Json Response |
|-----------------------------------|--------------------------|---------------|
| 8.1, 8.2, 8.3, 8.4                | 10.x, 11.x, 12.x         | `^3.0`        |
| 7.3, 7.4, 8.0, 8.1, 8.2, 8.3, 8.4 | 6.x, 7.x, 8.x, 9.x, 10.x | `^2.0`        |


To get the latest version of `Laravel Json Response`, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require dragon-code/laravel-json-response
```

Or manually update `require` block of `composer.json` and run `composer update`.

```json
{
    "require": {
        "dragon-code/laravel-json-response": "^3.0"
    }
}
```

## Using

After you've installed the package via composer, you're done. There's no step two.

This package will automatically register the `DragonCode\LaravelJsonResponse\Middlewares\SetHeaderMiddleware` middleware in the `web` and `api` groups, if they exist. The
middleware will add a header `Accept` that will effectively convert all responses to JSON format. This header will apply to all responses.

> If you need to redefine the header for specific groups of routes, you can do this by changing the [`settings`](config/http.php).


[badge_build]:          https://img.shields.io/github/actions/workflow/status/TheDragonCode/laravel-json-response/tests.yml?style=flat-square

[badge_downloads]:      https://img.shields.io/packagist/dt/dragon-code/laravel-json-response.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/dragon-code/laravel-json-response.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/TheDragonCode/laravel-json-response?label=stable&style=flat-square

[link_build]:           https://github.com/TheDragonCode/laravel-json-response/actions

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/dragon-code/laravel-json-response
