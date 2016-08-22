<?php

class MyClassBefore
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
        return $this;
    }
}