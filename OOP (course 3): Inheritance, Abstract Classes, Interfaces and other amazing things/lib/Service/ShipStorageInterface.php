<?php

interface ShipStorageInterface
{
	/**
	 * Returns an array of ship arrays, with key id, name, weaponpower, and defense
	 *
	 * @return aray
	 */
	public function fetchAllShipsData();

	/**
	 * @param integer $id
	 * @return array()
	 */
	public function fetchSingleShipData($id);
}