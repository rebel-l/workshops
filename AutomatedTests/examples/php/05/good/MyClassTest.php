<?php
error_reporting(E_ALL | E_STRICT);

require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testMyClass()
    {
        $my = new MyClass();
        $this->expectException('RuntimeException');
        $my->execute();
    }
}