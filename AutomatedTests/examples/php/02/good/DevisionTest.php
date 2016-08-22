<?php
/**
 * Tests the Devision class.
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 21.08.2016
 * Time: 13:45
 */

namespace Math;

require_once ('Devision.php');

class DevisionTest extends \PHPUnit_Framework_TestCase
{
	public function testCalculate()
	{
		$a = 10;
		$b = 5;
		$result = 2;
		$devision = new Devision();
		$this->assertSame($result, $devision->calculate($a, $b), '');
	}

	public function testZeroDevision()
	{
		$a = 10;
		$b = 0;
		$devision = new Devision();
		$this->expectException('LogicException');
		$devision->calculate($a, $b);
	}
}