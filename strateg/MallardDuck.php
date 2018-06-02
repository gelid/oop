<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:46
 */

namespace Pattern\Strateg;



class MallardDuck extends Duck
{
	public function __construct()
	{
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Squeak();
	}
}