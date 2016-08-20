<?php
/**
 * Class to devide two numbers
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 20.08.2016
 * Time: 16:55
 */

namespace Math;


class Devision
{
	public function calculate($a, $b)
	{
		if ($b === 0) {
			throw new \LogicException('Devision by zero ist not possible');
		}
		return $a / $b;
	}
}