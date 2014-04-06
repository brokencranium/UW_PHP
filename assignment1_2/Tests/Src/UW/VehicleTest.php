<?php
namespace Tests\UW;
use \UW\Vehicle as Vehicle;
require_once('PHPUnit/Framework/TestCase.php');

class VehicleTest extends \PHPUnit_Framework_TestCase {

private $_refl;

   /**
    *Check if the method exists 
    */
    public function testMethodExistence() {
      $this->assertTrue(method_exists('\UW\Vehicle', 'getNumberOfDoors'),'Method does not exist');
        }

   /**
    *Check if the property exists 
    */  
    public function testPropertyExistence() {
       $this->assertTrue(property_exists('\UW\Vehicle', '_numberOfDoors'),'Property does not exist');
    }

    /**
     *Check if the method is abstract
     */
      public function testMethodProperty() {
          $refl = new \ReflectionMethod('\UW\Vehicle', 'getNumberOfDoors');
          $this->assertTrue($refl->isAbstract(),'Method declaration needs to be abstract');       
        }
    
}
?>
