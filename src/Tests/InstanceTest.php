<?php

namespace PDO\Tests;

use PDO\Instance;

class InstanceTest extends \PHPUnit_Framework_TestCase
{
    private $instance;

    public static function setUpBeforeClass()
    {
        set_error_handler(function ($errno, $errstr, $errfile, $errline) {
            throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
        }); 
    }

    public static function tearDownAfterClass()
    {
        set_error_handler(function () {
        });
    }

    public function setUp()
    {
        $this->instance = new Instance();
    }

    /**
     * @test
     * @expectedException \ErrorException
     */
    public function getShouldThrowAnExceptionForNonExistentKey()
    {

        $this->instance->prepare('SELECT TRUE');
    }
}
