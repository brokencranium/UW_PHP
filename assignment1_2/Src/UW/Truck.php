<?php
namespace UW;
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
 *Variable Declarations
 */
    private $_year;
    private $_doors;
    private $_honk;

/**
 *Constructor, default doors and honk is set
 * @var doors  int 
 * @var honk   string  
 * @var year   int
 */
  public function __construct() {
       $this->_doors = 2;
       $this->_honk  = '';
       $this->_year  = 0; 
  }



/**
*Returns honk, since the truck is not defined
*enough, its returninng an empty string
*@return string
*/
	public function honk() {
		return $this->_honk;
	}

/**
*Sets year of make for the car 
*@var  int 
*/
        public function setYear($_im_year) {
          if(!is_int($_im_year)) {
             throw new \InvalidArgumentException('setYear accepts only integers');
            }       
 if($_im_year < 1800 || $_im_year > 2100 ) {
             throw new \InvalidArgumentException('setYear will accept trucks only bet 1800-2100');
            }
        echo $_im_year;
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
		return $this->_doors;
	}


}
?>
