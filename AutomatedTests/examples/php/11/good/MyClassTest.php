<?php
require_once ('MyClass.php');

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testMockMultiple()
    {
        $mockBuilder = $this->getMockBuilder('MyClass');
        $mockBuilder->setMethods([
            'get'
        ]);

        $mock = $mockBuilder->getMock();
        $mock->expects($this->exactly(3))
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('first_param')],
                [$this->equalTo('second_param')],
                [$this->equalTo('third_param')]
            )
            ->will(
                $this->onConsecutiveCalls(
                    'first_value',
                    'second_value',
                    'third_value'
                )
            );
        $this->assertSame('first_value', $mock->get('first_param'));
        $this->assertSame('second_value', $mock->get('second_param'));
        $this->assertSame('third_value', $mock->get('third_param'));
    }
}