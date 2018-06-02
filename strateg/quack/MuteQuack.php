<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:42
 */

namespace Pattern\Strateg;


class MuteQuack implements QuackBehavior
{
	public function quack()
	{
		echo "Muted<br>";
	}
}