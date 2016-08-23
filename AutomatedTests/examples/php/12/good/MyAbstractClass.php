<?php
require_once ('MyInterface.php');

abstract class MyAbstractClass
{
    public function setValue(MyInterface $value)
    {
        $value->doSomething();
    }

    public abstract function execute();
}