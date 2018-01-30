# IlluminateAgnostic\Collection

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
<!-- [![Total Downloads][ico-downloads]][link-downloads] -->
<!-- [![Quality Score][ico-code-quality]][link-code-quality] -->

This package is an **unmodified** extraction of the [Laravel's Illuminate\Support\Collection](https://github.com/laravel/framework/blob/5.5/src/Illuminate/Support/Collection.php) class, including all helpers, repackaged to be agnostic and available to any PHP project.   

It has its own namespace **(IlluminateAgnostic\Collection)**, so you can even use om Laravel apps without risking a namespace conflict.

For docs, please check the Laravel documentation: https://laravel.com/docs/5.5/collections.

## Install

Via Composer

``` bash
$ composer require pragmarx/ia-collection
```

## Usage

``` php
use IlluminateAgnostic\Collection\Support\Collection;

return (new Collection([1, 2, 3, 4, 5]))->sum()

// or

return collect([1, 2, 3, 4, 5])->sum()
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

If you discover any security related issues, please email acr@antoniocarlosribeiro.com instead of using the issue tracker.

## Credits

- [Antonio Carlos Ribeiro](https://twitter.com/iantonioribeiro)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pragmarx/ia-collection.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[ico-travis-waiting]: https://img.shields.io/travis/antonioribeiro/ia-collection/master.svg?style=flat-square
[ico-travis]: https://img.shields.io/badge/build-passing-green.svg?style=flat-square

[ico-scrutinizer-waiting]: https://img.shields.io/scrutinizer/coverage/g/antonioribeiro/ia-collection.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/badge/coverage-92%20%25-green.svg?style=flat-square

[ico-code-quality]: https://img.shields.io/scrutinizer/g/antonioribeiro/ia-collection.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pragmarx/ia-collection.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pragmarx/ia-collection
[link-travis]: https://travis-ci.org/antonioribeiro/ia-collection
[link-scrutinizer]: https://scrutinizer-ci.com/g/antonioribeiro/ia-collection/code-collectionucture
[link-code-quality]: https://scrutinizer-ci.com/g/antonioribeiro/ia-collection
[link-downloads]: https://packagist.org/packages/pragmarx/ia-collection
[link-author]: https://github.com/antonioribeiro
[link-contributors]: ../../contributors
