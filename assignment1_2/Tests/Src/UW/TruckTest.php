<?php
namespace Tests\UW;
use \UW\Truck as Truck;
require_once('PHPUnit/Framework/TestCase.php');

class TruckTest extends \PHPUnit_Framework_TestCase {

 private $_truck;


    /**
     * setUp() will be executed per test case. We declare a new Car object
     * per test case
     */
    public function setUp() {
       $this->_truck = new Truck();
    }
     

   /**
    *Check number of doors 
    */
    public function testNoOfDoors() {
      $this->assertEquals($this->_truck->getNumberOfDoors(),2,'Number of doors need to be 2');
        }
         
    /**
     *Get the year of make for the truck 
     */    
     public function testYearMake() {
       $this->_truck->setYear(1998);
       $this->assertEquals($this->_truck->getYear(),1998);   
      }    

  /**    
   * Year of the truck, pass a string 
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessage setYear accepts only integers
   */
    public function testYearMakeString(){
       $this->_truck->setYear('What the heck!');
    }

    /**
   * Year of the truck, pass a invalid year 
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessage setYear will accept trucks only bet 1800-2100 
   */
    public function testYearMakeRange(){
       $this->_truck->setYear(3011222);
    }    
   
   /**
    *Type of honk
    */
     public function testHonk() {
      $this->assertEquals($this->_truck->honk(), '');   

     }
}
?>
