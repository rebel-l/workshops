<?php
require_once ('Dependency.php');
require_once ('DependencyRefactored.php');

/**
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 21.08.2016
 * Time: 13:27
 */
class DependencyUnitTest extends PHPUnit_Framework_TestCase
{
	public function testDependency()
	{
		$obj = new Dependency();
		$this->assertNull($obj->getValue());
	}

	public function testDependencyRefactored()
	{
		$obj = new DependencyRefactored();
		$this->assertNull($obj->getValue());
	}
}