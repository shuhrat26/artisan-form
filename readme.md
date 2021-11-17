# ArtisanForm

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require shuhrat26/artisan-form
```

## Usage
Publish the package config file to your application.
```bash
php artisan vendor:publish --provider="Shuhrat26\ArtisanForm\ArtisanFormServiceProvider" --tag="artisan-form.config"
```
in the .env file, configure APP_URL = http://yoursite.xxx

Type http://yoursite.xxx/artisan in the address bar

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author@email.com instead of using the issue tracker.

## Credits

- [Author Name][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/shuhrat26/artisan-form.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/shuhrat26/artisan-form.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/shuhrat26/artisan-form/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/shuhrat26/artisan-form
[link-downloads]: https://packagist.org/packages/shuhrat26/artisan-form
[link-travis]: https://travis-ci.org/shuhrat26/artisan-form
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/shuhrat26
[link-contributors]: ../../contributors
