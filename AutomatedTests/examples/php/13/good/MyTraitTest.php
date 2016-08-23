<?php
require_once ('MyTrait.php');

class MyTraitTest extends PHPUnit_Framework_TestCase
{
    public function testTrait()
    {
        $my = $this->getMockBuilder('MyTrait')
            ->getMockForTrait();
        $this->assertSame('didSomething', $my->doSomething());
    }
}