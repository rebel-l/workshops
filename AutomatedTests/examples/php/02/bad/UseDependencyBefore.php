<?php
require_once ('Dependency.php');


/**
 *
 * @author: Rebel L <dj@rebel-l.net>
 *
 * Date: 21.08.2016
 * Time: 13:04
 */
class UseDependencyBefore
{
	private $dependency;

	public function __construct()
	{
		$this->dependency = new Dependency();
	}

	public function execute()
	{
		if ($this->dependency->getValue() === null) {
			return false;
		}

		return true;
	}
}