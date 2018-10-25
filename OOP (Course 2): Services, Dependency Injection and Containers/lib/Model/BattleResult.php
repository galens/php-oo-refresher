<?php

class BattleResult
{
	private $usedJediPowers;

	private $winningShip;

	private $losingShip;

	public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
	{
		$this->usedJediPowers = $usedJediPowers;
		$this->winningShip = $winningShip;
		$this->losingShip = $losingShip;
	}

	public function getWinningShip()
	{
		return $this->winningShip;
	}

	public function wereJediPowersUsed()
	{
		return $this->usedJediPowers;
	}

	public function getLosingShips()
	{
		return $this->losingShip;
	}

	public function isThereAWinner()
	{
		return $this->getWinningShip() !== null;
	}
}