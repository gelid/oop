<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:40
 */

namespace Pattern\Strateg;


class FlyNoWay implements FlyBehavior
{
	public function fly()
	{
		echo "Im can't fly<br>";
	}
}