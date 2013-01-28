<?php
namespace UW;
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
 *Variable Declarations
 */
   private $_honk;

/**
 *Constructor, default doors and honk is set
 * @var honk   string  
 */
  public function __construct() {
         parent::__construct();
         $this->_honk  = 'Honk Civic';
}

/**
*Returns the honk type 
*@return string
*/
	public function honk() {
		return $this->_honk;
	}

}
?>
