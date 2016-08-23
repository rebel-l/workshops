<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testExecuteHappy()
    {
        $my = new MyClass();
        $this->assertNull($my->execute());
    }
}