<?php
namespace UW;
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
       $this->_doors = 4;
       $this->_honk  = '';
       $this->_year  = 0; 
  }

/**
*Returns honk, since the car is not defined 
* enough its returning an empty string.
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
             throw new \InvalidArgumentException('setYear will accept cars only bet 1800-2100'); 
            }
        echo $_im_year; 
          $this->_year = $_im_year;
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
	 //   if($this->_doors == null) {
           //    $this->_doors = 4; 
             // }	
             return $this->_doors;
	}

}
?>
