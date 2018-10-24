<?php

require_once __DIR__.'/lib/Ship.php';

/**
 * @param Ship $someShip
 */
function printShipSummary($nameShip) 
{
	echo 'Ship name: '.$nameShip->name;
	echo '<hr />';
	$nameShip->sayHello();
	echo '<hr />';
	echo $nameShip->getName();
	echo '<hr />';
	echo $nameShip->getNameAndSpecs(false);
	echo '<hr />';
	echo $nameShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->setStrength(50);


printShipSummary($myShip);
echo '<hr />';
printShipSummary($otherShip);
echo '<hr />';
if($myShip->doesGivenShipHaveMoreStength($otherShip)) {
	echo $otherShip->name. ' has more strength';
} else {
	echo $myShip->name. ' has more stength';
}