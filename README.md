# This is my package laravel-backpack-help-docs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pentangle/laravel-backpack-help-docs.svg?style=flat-square)](https://packagist.org/packages/pentangle/laravel-backpack-help-docs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/pentangle/laravel-backpack-help-docs/run-tests?label=tests)](https://github.com/pentangle/laravel-backpack-help-docs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/pentangle/laravel-backpack-help-docs/Check%20&%20fix%20styling?label=code%20style)](https://github.com/pentangle/laravel-backpack-help-docs/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pentangle/laravel-backpack-help-docs.svg?style=flat-square)](https://packagist.org/packages/pentangle/laravel-backpack-help-docs)

---
This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this laravel-backpack-help-docs
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
5. If you need help creating a package, consider picking up our <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-backpack-help-docs.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-backpack-help-docs)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require pentangle/laravel-backpack-help-docs
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="pentangle\LaravelBackpackHelpDocs\LaravelBackpackHelpDocsServiceProvider" --tag="laravel-backpack-help-docs-migrations"
php artisan migrate
```
```bash
php artisan backpack:add-sidebar-content "<li class='nav-item'><a class='nav-link' href='{{ backpack_url('help-doc') }}'><i class='nav-icon la la-question'></i> Help docs</a></li>"
php artisan backpack:add-sidebar-content "<x-help-docs-widget/>"
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="pentangle\LaravelBackpackHelpDocs\LaravelBackpackHelpDocsServiceProvider" --tag="laravel-backpack-help-docs-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-backpack-help-docs = new pentangle\LaravelBackpackHelpDocs();
echo $laravel-backpack-help-docs->echoPhrase('Hello, pentangle!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Pentangle](https://github.com/pentangle)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
