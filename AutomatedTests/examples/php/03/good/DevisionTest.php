<?php
/**
 * Tests the Devision class.
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 20.08.2016
 * Time: 16:59
 */

namespace Math;

require_once ("Devision.php");

class DevisionTest extends \PHPUnit_Framework_TestCase
{
    public function calculateValuesHappy()
    {
        return [
            [10, 5, 2],
            [15.5, 1.3, 11.923076923076923]
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $result
     *
     * @dataProvider calculateValuesHappy
     */
	public function testCalculateHappy($a, $b, $result)
	{
		$devision = new Devision();
		$this->assertSame($result, $devision->calculate($a, $b), '');
	}
}