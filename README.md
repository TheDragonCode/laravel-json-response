# Laravel Json Response

Automatically always return a response in JSON format

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![License][badge_license]][link_license]

[![StyleCI Status][badge_styleci]][link_styleci]
[![Github Workflow Status][badge_build]][link_build]
[![Coverage Status][badge_coverage]][link_scrutinizer]
[![Scrutinizer Code Quality][badge_quality]][link_scrutinizer]


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
exist. The middleware will add a header `Accept` that will effectively convert all responses to JSON format. This header will apply to all responses.

## For Enterprise

Available as part of the Tidelift Subscription.

The maintainers of `andrey-helldar/laravel-json-response` and thousands of other packages are working with Tidelift to deliver commercial support and maintenance for the open source packages you use to build your applications. Save time, reduce risk, and improve code health, while paying the maintainers of the exact packages you use. [Learn more.](https://tidelift.com/subscription/pkg/packagist-andrey-helldar-laravel-json-response?utm_source=packagist-andrey-helldar-laravel-json-response&utm_medium=referral&utm_campaign=enterprise&utm_term=repo)


[badge_build]:          https://img.shields.io/github/workflow/status/andrey-helldar/laravel-json-response/phpunit?style=flat-square

[badge_coverage]:       https://img.shields.io/scrutinizer/coverage/g/andrey-helldar/laravel-json-response.svg?style=flat-square

[badge_downloads]:      https://img.shields.io/packagist/dt/andrey-helldar/laravel-json-response.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/andrey-helldar/laravel-json-response.svg?style=flat-square

[badge_quality]:        https://img.shields.io/scrutinizer/g/andrey-helldar/laravel-json-response.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/andrey-helldar/laravel-json-response?label=stable&style=flat-square

[badge_styleci]:        https://styleci.io/repos/374687566/shield

[badge_unstable]:       https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_build]:           https://github.com/andrey-helldar/laravel-json-response/actions

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/andrey-helldar/laravel-json-response

[link_scrutinizer]:     https://scrutinizer-ci.com/g/andrey-helldar/laravel-json-response/?branch=main

[link_styleci]:         https://github.styleci.io/repos/374687566
