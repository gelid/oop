<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:46
 */

namespace Pattern\Strateg;



class SecondDuck extends Duck
{
	public function __construct()
	{
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new MuteQuack();
	}
}