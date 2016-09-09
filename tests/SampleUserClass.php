<?php
namespace Redbox\Hydrate\Tests;


class SampleUserClass
{
    /**
     * @var string
     */
    protected $username = '';

    /**
     * @var string
     */
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