<?php
namespace Tests\UW2;
use \UW2\MySqliDbConn as DbConn;

class TestConnectivity extends \PHPUnit_Framework_TestCase {

 private $_conn;
 
    /**
     * setUp() will be executed per test case. A connection will be 
     * made and disconnected for every test case
     */
    public function setUp() {
      $this->_conn = new DbConn("localhost", "vicky","pwd","UW");
    }
     

   /**
    *Check whether the connection was made successfully
    */
    public function testConnection() {
      
      $this->_conn->connect();
      $this->assertEquals(true, $this->_conn->isConnected());
      $this->_conn->disconnect();
        }
         
    /**
     *Check whether the disconnect is working 
     */    
     public function testDisconnect() {
      $this->_conn->connect();
      $this->assertEquals('UW', $this->_conn->getDbName());
      $this->_conn->disconnect();
      $this->assertEquals(false, $this->_conn->isConnected());
      }    

 }
?>
