[![Build Status](https://travis-ci.org/johnnymast/redbox-hydrator.svg?branch=master)](https://travis-ci.org/johnnymast/redbox-hydrator)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-hydrator/?branch=master)
[![GitHub stars](https://img.shields.io/badge/HHVM-Ready-green.svg)](http://hhvm.com/)
[![Twitter URL](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&label=Contact author)](https://twitter.com/intent/tweet?text=@mastjohnny)

# Redbox-hydrate

Please note this is not ready!!
  
  
## System Requirements

This package only requires the following:

* PHP >= 5.40

Dit will also require **PHPUnit** 4.6 but that will be installed upon installing the package using composer. 
  
## Examples 

There are serveral methods of using the package. You can use any kind of API style you see fit in your operation for example.

## Use the static function method 

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
## Use the Hydrate function

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
