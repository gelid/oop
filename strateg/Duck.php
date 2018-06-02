<?php
/**
 * Created by PhpStorm.
 * User: gelid
 * Date: 18.05.18
 * Time: 16:27
 */

namespace Pattern\Strateg;


abstract class Duck
{
	/**
	 * @var $flyBehavior FlyBehavior
	 * @var $quackBehavior QuackBehavior
	 */
	public  $flyBehavior;
	public  $quackBehavior;

	public function performFly() {

		$this->flyBehavior->fly();
	}

	public function performQuack() {
		$this->quackBehavior->quack();
	}

	public function setFlyBehavior(FlyBehavior $fb) {
		$this->flyBehavior = $fb;
	}

	public function setQuackBehavior(QuakBehavior $qb) {
		$this->quackBehavior = $qb;
	}

}

