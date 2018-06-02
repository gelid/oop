<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:43
 */

namespace Pattern\Strateg;


class Squeak implements QuackBehavior
{
	public function quack()
	{
		echo "Squeak<br>";
	}
}