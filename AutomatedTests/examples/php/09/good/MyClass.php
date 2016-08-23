<?php

class MyClass
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * @return Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function execute()
    {
        // do something

        $this->log('Something went wrong');
    }

    protected function log($message)
    {
        $this->getLogger()->log($message);
    }
}