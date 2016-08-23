<?php

/**
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 21.08.2016
 * Time: 12:50
 */
class DependencyRefactored
{
	private $value;

	public function __construct()
	{
		$this->value = '';
	}

	public function getValue()
	{
		return $this->value;
	}
}