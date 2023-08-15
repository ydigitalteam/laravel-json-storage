# connector

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_website``` ```:author_email``` ```:vendor``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This connector is designed to integrate yobuxxo forms on a site created using laravel. Add any form to the site and send data from it to the form controller. From the controller, send data to crm using this connector

Set QUEUE_CONNECTION=database

php artisan vendor:publish --provider='YdigitalTeam\DemoAccess\Providers\DemoAccessServiceProvider'

Add CRM_FORM_URL with webform action url to .env file



## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
database/        
src/
docs/
config/
tests/
vendor/
```


## Install

Via Composer
```
    "require": {
        ...
        "ydigitalteam/laravel-json-storage": "dev-main"
    },
```
```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:ydigitalteam/laravel-json-storage.git"
        }
    ],
```

``` bash
$ composer require ...
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email support@y-digital.team instead of using the issue tracker.

## Credits

- [Yurii Bevzenko][[link-author](https://github.com/ydigitalteam)]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: [https://github.com/:author_username](https://github.com/ydigitalteam)
[link-contributors]: ../../contributors
