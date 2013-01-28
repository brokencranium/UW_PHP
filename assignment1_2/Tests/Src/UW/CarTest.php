<?php
namespace Tests\UW;
use \UW\Car as Car;
require_once('PHPUnit/Framework/TestCase.php');

class CarTest extends \PHPUnit_Framework_TestCase {

 private $_car;


    /**
     * setUp() will be executed per test case. We declare a new Car object
     * per test case
     */
    public function setUp() {
       $this->_car = new Car();
    }
     

   /**
    *Check number of doors 
    */
    public function testNoOfDoors() {
      $this->assertEquals($this->_car->getNumberOfDoors(),4,'Number of doors need to be 4');
        }
         
    /**
     *Get the year of make for the car 
     */    
     public function testYearMake() {
       $this->_car->setYear(1998);
       $this->assertEquals($this->_car->getYear(),1998);   
      }    

  /**    
   * Year of the car, pass a string 
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessage setYear accepts only integers
   */
    public function testYearMakeString(){
       $this->_car->setYear('What the heck!');
    }

    /**
   * Year of the car, pass a invalid year 
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessage setYear will accept cars only bet 1800-2100 
   */
    public function testYearMakeRange(){
       $this->_car->setYear(3011222);
    }    
   
   /**
    *Type of honk
    */
     public function testHonk() {
      $this->assertEquals($this->_car->honk(), '');   

     }
}
?>
