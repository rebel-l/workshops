<?php
require_once ('DependencyRefactored.php');


/**
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 21.08.2016
 * Time: 13:04
 */
class UseDependencyAfter
{
	private $dependency;

	public function __construct()
	{
		$this->dependency = new DependencyRefactored();
	}

	public function execute()
	{
		if ($this->dependency->getValue() === null) {
			return false;
		}

		return true;
	}
}