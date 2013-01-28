<?php
/**
*This class extends the vehicle interface and 
*implements the vehicle class in order to define 
*a car as a truck
*/

/**
*Import the Vehicle class and VehicleInterface 
*/
require_once('Vehicle.php');
require_once('VehicleInterface.php'); 

/**
*Public class to represent a vehicle as a truck
*/
class Truck extends Vehicle
implements VehicleInterface {

/**
*Number of doors 
*@constant int
*/
	const NUM_OF_DOORS = 2;


/**
*Returns honk, since the truck is not defined
*enough, its returninng an empty string
*@return string
*/
	public function honk() {
		return ' ';
	}


/**
*Sets year of make for the truck
*@var int
*/
	public function setYear($_im_year) {
		$this->_year = $_im_year;
	}


/**
*Gets the year of make for the truck
*@return int
*/
	public function getYear() {
		return $this->_year;
	}

/**
*Gets the number of doors for the truck 
*@return int
*/
	public function getNumberOfDoors(){
		return NUM_OF_DOORS;
	}


}
?>
