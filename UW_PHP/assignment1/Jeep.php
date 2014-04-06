<?php
/**
*This class extentds the truck class and determines the 
*type of truck
*/


/**
*Imports Car class and the vehicle interface
*/
require_once 'Truck.php';
require_once 'VehicleInterface.php';


/**
*Public class for a specific truck type 
*/
class Jeep extends Truck
            implements VehicleInterface{

/**
*Returns the honk type 
*@return string
*/
	public function honk() {
		return 'Bonk Bonk!';
	}

}
?>
