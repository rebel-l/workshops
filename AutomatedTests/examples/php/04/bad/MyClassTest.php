<?php
require_once ('MyClassAfter.php');
require_once ('MyClassBefore.php');


class MyClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException RuntimeException
     */
    public function testBefore()
    {
        $my = new MyClassBefore();
        $my->prepare()
            ->execute();
    }

    /**
     * @expectedException RuntimeException
     */
    public function testAfter()
    {
        $my = new MyClassAfter();
        $my->prepare()
            ->execute();
    }
}