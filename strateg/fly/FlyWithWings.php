<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:39
 */

namespace Pattern\Strateg;


class FlyWithWings implements FlyBehavior
{
	public function fly()
	{
		echo "Im can fly<br>";
	}
}