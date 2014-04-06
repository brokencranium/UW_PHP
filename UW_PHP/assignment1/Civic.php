<?php
/**
*This class extentds the car interface and determines the 
*type of car
*/


/**
*Imports Car class and the vehicle interface
*/
require_once 'Car.php';
require_once 'VehicleInterface.php';


/**
*Public class for a specific car type 
*/
class Civic extends Car
            implements VehicleInterface{

/**
*Returns the honk type 
*@return string
*/
	public function honk() {
		return 'Honk Honk!';
	}

}
?>
