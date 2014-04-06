<?php
namespace UW;
/**
 * Astract class representing vehicle
 */

 abstract class Vehicle
{
	/**
	 * Number of doors
	 *
	 * @var int
	 */
	protected $_numberOfDoors;

	/**
	 * Returns the number of doors
	 *
	 * @return int
         */
	abstract public function getNumberOfDoors();
}

?>
