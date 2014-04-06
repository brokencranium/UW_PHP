<?php
/**
*This class extends the vehile interface and 
*implements the vehicle class as this inherits
*functionality of a vehicle and has its own properties 
*which makes it to a car
*/

/**
*Imports vehicle class and the vehicle interface
*/
require_once('Vehicle.php');
require_once('VehicleInterface.php');

/**
*Public class to represent a car
*/
class Car extends Vehicle
          implements VehicleInterface
   {
/**
*Number of doors 
*@constant int 
*/

   	 const NUM_OF_DOORS = 4;

/**
*Returns honk, since the car is not defined 
* enough its returning an empty string.
*@return string
*/
   	public function honk() {
   		return ' ';
   	}

/**
*Sets year of make for the car
*@var  int 
*/
	public function setYear($_im_year) {
		$this->_year = $_im_year;
	 D  
           }
/**
*Get the year of make for the car 
*@return int  
*/
	public function getYear() {
		return $this->_year;
	}
/**
*Gets the number of doors that the car has,
*since th car is not specific enough it defaults
* to 4
*@return int
*/
	public function getNumberOfDoors(){
		return NUM_OF_DOORS;
	}

}
?>
