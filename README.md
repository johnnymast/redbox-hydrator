[![Build Status](https://travis-ci.org/johnnymast/redbox-hydrator.svg?branch=master)](https://travis-ci.org/johnnymast/redbox-hydrator)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/?branch=master)
[![GitHub stars](https://img.shields.io/badge/HHVM-Ready-green.svg)](http://hhvm.com/)
[![Twitter URL](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&label=Contact author)](https://twitter.com/intent/tweet?text=@mastjohnny)

# Redbox-hydrate

This Hydrator helps you to quickly **hydrate** an new class instance. layman's terms this means quicky assiging data to a given class properties. Please note it does not mether if you have private or protected properties in your class it will take care of that. Look in the examples folder for basic [examples](examples) of how to use the package.

## System Requirements

This package only requires the following:

* PHP >= 5.40 (But higher is always better)
* [Composer](https://getcomposer.org/) for autoloading

## Installation

Using [composer](https://packagist.org/packages/redbox/scan):

```bash
$ composer require redbox/hydrate
```

## Installation trough archive download

If you download the package from a website (for example [github.io](https://github.com/johnnymast/redbox-hydrator/) or [phpclasses.org](http://www.google.com) or any other) you will need composer installed on your machine.
The reason for this is that Redbox-scan comes without the require vendor directory which is required to run the package.

First of all if you don't have composer installed you can find it [here](https://getcomposer.org/) follow the instructions and don't get intimidated in fact its really really easy to install.

In the this sample i will assume you have composer installed (on any machine). Go to the package root (where composer.json is located) and execute the following command.

```bash
$ composer install  --no-dev
```

Now your almost ready to go. In your project require the redbox-scan.php (located in the package root). Assuming that Redbox-scan was installed in ./lib/redbox-hydrator/ your php file would look like this.

```php
<?php
require 'lib/redbox-hydrator/redbox-hydrator.php';
// more of your nice code below
```

And you are ready use Redbox-hydrator in your application.

## Examples 

There are serveral methods of using the package. You can use any kind of API style you see fit in your operation for example.

## Static class method 

```php

/**
 * Method 1
 */
$result1 = Hydrator::hydrate(new User())->with(
    [
        'username' => 'abc',
        'password' => 'pass'
    ]
);

```
## Hydrate function

```php

/**
 * Method 2
 */
$result2 = Hydrate(new User())->with(
    [
        'username' => 'abc',
        'password' => 'pass'
    ]
);


```

## Instantiate a new Hydrator

```php

/**
 * Method 3
 */
$hydrator = new Hydrator(new User());
$result3 = $hydrator->with([
    [
        'username' => 'abc',
        'password' => 'pass'
    ]
]);
```


## Troubleshooting

...

## Author

Redbox-hydrate is created and maintained by [Johnny Mast](mastjohnny@gmail.com). For feature requests and suggestions
you could consider sending me an e-mail.

## License

Redbox-hydrate is released under the MIT public license.

<https://github.com/johnnymast/redbox-hydrator/blob/master/LICENSE.md>
