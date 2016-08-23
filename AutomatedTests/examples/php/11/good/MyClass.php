<?php
class MyClass
{
    /**
     * @var array
     */
    private $list = [];

    public function add(string $key, $value)
    {
        $this->list[$key] = $value;
    }

    public function get(string $key)
    {
        if (array_key_exists($key, $this->list)) {
            return $this->list[$key];
        }
    }
}