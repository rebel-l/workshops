<?php

class MyClassAfter
{
    private $value;

    public function execute()
    {
        if ($this->value === null) {
            throw new RuntimeException('Cannot work with nothing');
        }
    }

    public function prepare()
    {
        throw new RuntimeException('Failure on preparation');
    }
}