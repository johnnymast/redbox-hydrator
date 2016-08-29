<?php
namespace Redbox\Hydrate\Tests;

use Prophecy\Exception\Exception;
use Redbox\Hydrate\Hydrator;

class HydratorExceptionTests extends \PHPUnit_Framework_TestCase
{

    /**
     *  @expectedException \Exception
     */
    public function testInvalidSourceThrowsAnException ()
    {
        Hydrator::hydrate(new SampleUserClass())->with(new \stdClass());
    }

    /**
     *  @expectedException \Exception
     */
    public function testInvalidDestinationThrowsAnException ()
    {

        Hydrator::hydrate([])->with(
            [
                'username' => 'abc',
                'password' => 'pass'
            ]
        );
    }
}
