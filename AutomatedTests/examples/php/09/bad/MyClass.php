<?php
/**
 * Log method delivered from somewhere global.
 *
 * @param $message
 */
function logSomething($message)
{
    // write message to a file
};

class MyClass
{
    public function execute()
    {
        // do something

        logSomething('Something went wrong');
    }
}