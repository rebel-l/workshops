<?php
require_once ('Logger.php');
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers MyClass::execute
     * @covers MyClass::log
     */
    public function testExecuteHappy()
    {
        $mockBuilder = $this->getMockBuilder('Logger');
        $mockBuilder->setMethods([
            'log'
        ]);

        $logger = $mockBuilder->getMock();
        $logger
            ->expects($this->once())
            ->method('log')
            ->with('Something went wrong');

        $my = new MyClass();
        $my->setLogger($logger);
        $my->execute();
    }
}