<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers MyClass::execute
     */
    public function testMyClass()
    {
        $my = new MyClass();
        $my->execute();
        $this->assertSame('done', $my->getStatus());
    }
}