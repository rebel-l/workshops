<?php
require_once ('UseDependencyBefore.php');
require_once ('UseDependencyAfter.php');

/**
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 21.08.2016
 * Time: 13:10
 */
class UseDenpendencyIntegrationTest extends PHPUnit_Framework_TestCase
{
	public function testBefore()
	{
		$obj = new UseDependencyBefore();
		$this->assertFalse($obj->execute());
	}

	public function testAfter()
	{
		$obj = new UseDependencyAfter();
		$this->assertFalse($obj->execute());
	}
}