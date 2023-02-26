# Laravel Menus

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mudassar1/laravel-menus.svg?style=flat-square)](https://packagist.org/packages/mudassar1/laravel-menus-limitless)

[//]: # ([![Software License]&#40;https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square&#41;]&#40;LICENSE.md&#41;)
[//]: # ([![Build Status]&#40;https://img.shields.io/travis/mudassar1/laravel-menus/master.svg?style=flat-square&#41;]&#40;https://travis-ci.org/nWidart/laravel-menus&#41;)
[//]: # ([![Scrutinizer Coverage]&#40;https://img.shields.io/scrutinizer/coverage/g/mudassar1/laravel-menus.svg?style=flat-square&#41;]&#40;https://scrutinizer-ci.com/g/nWidart/laravel-menus/?branch=master&#41;)
[//]: # ([![SensioLabsInsight]&#40;https://img.shields.io/sensiolabs/i/6b187410-e586-465f-a137-2d1fbf7ac724.svg?style=flat-square&#41;]&#40;https://insight.sensiolabs.com/projects/6b187410-e586-465f-a137-2d1fbf7ac724&#41;)
[//]: # ([![Quality Score]&#40;https://img.shields.io/scrutinizer/g/mudassar1/laravel-menus.svg?style=flat-square&#41;]&#40;https://scrutinizer-ci.com/g/nWidart/laravel-menus&#41;)
[![Total Downloads](https://img.shields.io/packagist/dt/mudassar1/laravel-menus.svg?style=flat-square)](https://packagist.org/packages/mudassar1/laravel-menus-limitless)

| **Laravel** | **laravel-menus** |
|-------------|-------------------|
| 9.0 & lower | ^1.0.0            |
| 10.0        | ^1.0.0            |

`mudassar1/laravel-menus-limitless` is a laravel package which created to manage menus. It has a feature called presenters which enables easy styling and custom structure of menu rendering.

Add Service Provider

Next add the following service provider in config/app.php.

`'providers' => [
    Mudassar\Menus\MenusServiceProvider::class,
],`

Next, add the following aliases to aliases array in the same file.

`'aliases' => [
    'Menu' => Mudassar\Menus\Facades\Menu::class,
],`

Next publish the package's configuration file by running :

`php artisan vendor:publish --provider="Nwidart\Menus\MenusServiceProvider"`

With one big added bonus that the original package didn't have: **tests**.

This is a fork & modified version of `nwidart/laravel-menus`

## Documentation

You'll find installation instructions and full documentation on https://nwidart.com/laravel-menus/.

## Credits

- [Mudassar Yaseen](https://github.com/mudassar1)
- [Nwidart](https://github.com/nwidart)

[//]: # (- [All Contributors]&#40;../../contributors&#41;)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
