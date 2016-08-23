<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testExecuteHappy()
    {
        $my = new MyClassStub();
        $my->execute();
    }
}

class MyClassStub extends MyClass
{
    protected function log($message)
    {
        // ignore the dependency to Logger
    }
}