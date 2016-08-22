<?php
class MyClass
{
    private $status = '';


    public function __construct()
    {
        $this->status = 'initialized';
    }

    public function execute()
    {
        $this->beforeExecute();

        /** do some fancy stuff */

        $this->afterExecute();
    }

    public function getStatus()
    {
        return $this->status;
    }

    private function afterExecute()
    {
        $this->status = 'done';
    }

    private function beforeExecute()
    {

    }
}