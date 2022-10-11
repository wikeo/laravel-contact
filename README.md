# Simple but powerful Laravel package to create a contact form.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wikeo/laravel-contact.svg?style=flat-square)](https://packagist.org/packages/wikeo/laravel-contact)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wikeo/laravel-contact/run-tests?label=tests)](https://github.com/wikeo/laravel-contact/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/wikeo/laravel-contact/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/wikeo/laravel-contact/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/wikeo/laravel-contact.svg?style=flat-square)](https://packagist.org/packages/wikeo/laravel-contact)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://banners.beyondco.de/Laravel%20Contact.png?theme=light&packageManager=composer+require&packageName=wikeo%2Flaravel-contact&pattern=architect&style=style_1&description=Simple+but+powerful+Laravel+package+to+create+a+contact+form&md=1&showWatermark=0&fontSize=100px&images=mail-open&widths=350&heights=350" width="100%" />](https://github.com/wikeo/laravel-contact)

Create contact forms shouldn't be repetitive, that's why we created this package you can use on every Laravel website you have !

## Installation

You can install the package via composer:

```bash
composer require wikeo/laravel-contact
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-contact-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-contact-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-contact-views"
```

## Usage

```php
$laravelContact = new Wikeo\LaravelContact();
echo $laravelContact->echoPhrase('Hello, Wikeo!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Thomas](https://github.com/wikeo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
