<?php
namespace Tests\UW;
use \UW\Civic as Civic;
require_once('PHPUnit/Framework/TestCase.php');

class CivicTest extends \PHPUnit_Framework_TestCase {

 private $_civic;


    /**
     * setUp() will be executed per test case. We declare a new Car object
     * per test case
     */
    public function setUp() {
       $this->_civic = new Civic();
    }
     

   /**
    *Check number of doors 
    */
    public function testNoOfDoors() {
      $this->assertEquals($this->_civic->getNumberOfDoors(),4,'Number of doors need to be 4');
        }
         
    /**
     *Get the year of make for the civic 
     */    
     public function testYearMake() {
       $this->_civic->setYear(1998);
       $this->assertEquals($this->_civic->getYear(),1998);   
      }    

  /**    
   * Year of the civic, pass a string 
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessage setYear accepts only integers
   */
    public function testYearMakeString(){
       $this->_civic->setYear('What the heck!');
    }

    /**
   * Year of the civic, pass a invalid year 
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessage setYear will accept cars only bet 1800-2100
   */
    public function testYearMakeRange(){
       $this->_civic->setYear(3011222);
    }    
   
   /**
    *Type of honk
    */
     public function testHonk() {
      $this->assertEquals($this->_civic->honk(), 'Honk Civic');   

     }
}
?>
