<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testGetValueHappy()
    {
        $my = new MyClass();
        $this->assertSame('', $my->getValue(), 'Expects empty string');
    }

    public function testSetValueHappy()
    {
        $fixture = 'myValue';
        $my = new MyClass();
        $my->setValue($fixture);
        $this->assertSame($fixture, $my->getValue());
    }
}