<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testExecuteHappy()
    {
        $mockBuilder = $this->getMockBuilder('MyClass');
        $mockBuilder->setMethods([
            'log'
        ]);
        /**
         * @var MyClass $my
         */
        $my = $mockBuilder->getMock();
        $this->assertNull($my->execute());
    }
}