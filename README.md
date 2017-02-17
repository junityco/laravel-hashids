# Hashids for Laravel
**Hashids** is small PHP library to generate YouTube-like ids from numbers. Use it when you don't want to expose your database ids to the user: [http://hashids.org/php](http://hashids.org/php)

[![Total Downloads](https://img.shields.io/packagist/dm/junityco/laravel-hashids.svg?style=flat)](https://packagist.org/packages/junityco/laravel-hashids)
[![Latest Version](https://img.shields.io/packagist/v/junityco/laravel-hashids.svg?style=flat)](https://github.com/junityco/laravel-hashids/releases)
[![License](https://img.shields.io/packagist/l/junityco/laravel-hashids.svg?style=flat)](https://packagist.org/packages/junityco/laravel-hashids)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require junityco/laravel-hashids
```

Add the service provider to `config/app.php` in the `providers` array.

```php
Junity\Hashids\HashidsServiceProvider::class
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in `config/app.php` to your aliases array.

```php
'Hashids' => Junity\Hashids\Facades\Hashids::class
```

## Configuration

Laravel Hashids requires connection configuration. To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Junity\Hashids\HashidsServiceProvider"
```

This will create a `config/hashids.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Quick Example

```php
use Junity\Hashids\Facades\Hashids;

$id = Hashids::encode(1, 2, 3); // o2fXhV
$numbers = Hashids::decode($id); // [1, 2, 3]
```

There are other methods in this package that are not documented here. For documentation visit the [Hashids package](https://github.com/ivanakimov/hashids.php) homepage.
