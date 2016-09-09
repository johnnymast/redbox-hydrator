<?php
require 'autoload.php';

use Redbox\Hydrate\Hydrator;
use function Redbox\Hydrate\Helpers\Hydrate;

class User {
    protected $username = '';
    private $password = '';

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}

/**
 * Method 1
 */
$result1 = Hydrator::hydrate(new User())->with(
    [
        'username' => 'abc',
        'password' => 'pass'
    ]
);

/**
 * Method 2
 */
$result2 = Hydrate(new User())->with(
    [
        'username' => 'abc',
        'password' => 'pass'
    ]
);


/**
 * Method 3
 */
$hydrator = new Hydrator(new User());
$result3 = $hydrator->with(
    [
        'username' => 'abcs',
        'password' => 'pass'
    ]
);

unset($hydrator);

/**
 * Dump what ever you want
 */
//var_dump($result1);
//var_dump($result2);
var_dump($result3);
