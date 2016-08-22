<?php
require_once ('MyClassAfter.php');
require_once ('MyClassBefore.php');


class MyClassTest extends PHPUnit_Framework_TestCase
{

    public function testBefore()
    {
        $my = new MyClassBefore();
        $my->prepare();

        $this->expectException('RuntimeException');
        $this->expectExceptionMessage('Cannot work with nothing');
        $my->execute();
    }

    public function testAfter()
    {
        $my = new MyClassAfter();
        $my->prepare();

        $this->expectException('RuntimeException');
        $this->expectExceptionMessage('Cannot work with nothing');
        $my->execute();
    }
}