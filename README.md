# IlluminateAgnostic \ Collection

<p align="center">
    <a href="https://packagist.org/packages/pragmarx/ia-collection"><img alt="Latest Stable Version" src="https://img.shields.io/packagist/v/pragmarx/ia-collection.svg?style=flat-square"></a>
    <a href="LICENSE"><img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square"></a>
    <a href="https://scrutinizer-ci.com/g/antonioribeiro/ia-collection/?branch=master"><img alt="Code Quality" src="https://img.shields.io/scrutinizer/g/antonioribeiro/ia-collection.svg?style=flat-square"></a>
    <a href="https://travis-ci.org/antonioribeiro/ia-collection"><img alt="Build" src="https://img.shields.io/travis/antonioribeiro/ia-collection.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/pragmarx/ia-collection"><img alt="Downloads" src="https://img.shields.io/packagist/dt/pragmarx/ia-collection.svg?style=flat-square"></a>
</p>
<p align="center">
    <a href="https://scrutinizer-ci.com/g/antonioribeiro/ia-collection/?branch=master"><img alt="Coverage" src="https://img.shields.io/scrutinizer/coverage/g/antonioribeiro/ia-collection.svg?style=flat-square"></a>
    <a href="https://styleci.io/repos/119605788"><img alt="StyleCI" src="https://styleci.io/repos/119605788/shield"></a>
    <!-- <a href="https://insight.sensiolabs.com/projects/156fbef1-b03f-4fca-ba97-57874b7a35bf"><img alt="SensioLabsInsight" src="https://img.shields.io/sensiolabs/i/156fbef1-b03f-4fca-ba97-57874b7a35bf.svg?style=flat-square"></a> -->
    <a href="https://travis-ci.org/antonioribeiro/ia-collection"><img alt="PHP" src="https://img.shields.io/badge/PHP-7.0%20--%207.3-brightgreen.svg?style=flat-square"></a>
</p>

This package is an **unmodified** extraction of the [Laravel's Illuminate\Support\Collection](https://github.com/laravel/framework/blob/5.5/src/Illuminate/Support/Collection.php) class, including all helpers, repackaged to be agnostic and available to any PHP project.   

It has its own namespace **(IlluminateAgnostic\Collection)**, so you can use it even on Laravel apps without risking a namespace conflict.

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
