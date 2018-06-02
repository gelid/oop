<?php
namespace Pattern\Strateg;
include_once "../vendor/autoload.php";

$duck = new MallardDuck();
$duck->performFly();
$duck->performQuack();
$duck->setFlyBehavior(new FlyNoWay());
$duck->performFly();

$sduck = new SecondDuck();
$sduck->performFly();
$sduck->performQuack();