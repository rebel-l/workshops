<?php
require_once ('MyAbstractClass.php');

class MyAbstractClassTest extends PHPUnit_Framework_TestCase
{
    public function testMockMultiple()
    {
        $interface = $this->getMockBuilder('MyInterface')
            ->setMethods([
                'doSomething'
            ])
            ->getMockForAbstractClass();
        $interface->expects($this->once())
            ->method('doSomething');

        $my = $this->getMockBuilder('MyAbstractClass')
            ->getMockForAbstractClass();
        $my->setValue($interface);
    }
}