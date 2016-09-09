<?php
namespace Redbox\Hydrate\Tests;

use Redbox\Hydrate\Hydrator;

class HydratorBasicTests extends \PHPUnit_Framework_TestCase
{

    /**
     * @return array
     */
    public static function hydrationDataProvider() {
        return [
            [
                'username' => 'github',
                'password' => '***'
            ]
        ];
    }

    /**
     * @dataProvider hydrationDataProvider
     * @param $username
     * @param $password
     */
    public function testFunctionHydrator ($username, $password)
    {
        /** @var SampleUserClass $result */
        $result = Hydrator::hydrate(new SampleUserClass())->with(
            [
                'username' => $username,
                'password' => $password
            ]
        );

        $this->assertTrue(is_object($result) == true);
        $this->assertEquals($username, $result->getUsername());
        $this->assertEquals($password, $result->getPassword());
    }

    /**
     * @dataProvider hydrationDataProvider
     * @param $username
     * @param $password
     */
    public function testWrappedHydration ($username, $password)
    {
        /** @var SampleUserClass $result */
        $result = Hydrator::hydrate(new SampleUserClass())->with(
            [
                'username' => $username,
                'password' => $password,
            ]
        );

        $this->assertTrue(is_object($result) == true);
        $this->assertEquals($username, $result->getUsername());
        $this->assertEquals($password, $result->getPassword());
    }

    /**
     * @dataProvider hydrationDataProvider
     * @param $username
     * @param $password
     */
    public function testConstructedHydration ($username, $password)
    {
        $hydrator = new Hydrator(new SampleUserClass());

        /** @var SampleUserClass $result */
        $result = $hydrator->with(
            [
                'username' => $username,
                'password' => $password,
            ]
        );

        $this->assertTrue(is_object($result) == true);
        $this->assertEquals($username, $result->getUsername());
        $this->assertEquals($password, $result->getPassword());
    }
}
