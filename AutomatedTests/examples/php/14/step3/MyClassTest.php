<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testMutators()
    {
        $fixture = 'Lars';

        $my = new MyClass();
        $this->assertSame('', $my->getName(), 'Default value should be an empty string');
        $this->assertInstanceOf('MyClass', $my->setName($fixture), 'Setter should support fluent interfaces');
        $this->assertSame($fixture, $my->getName(), 'Setter did not set correct value');
    }
}