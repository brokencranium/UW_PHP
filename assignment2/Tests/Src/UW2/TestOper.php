<?php
namespace Tests\UW2;

use \UW2\MySqliDbConn as DbConn;
use \UW2\MySqliDbOp   as DbOp;

class TestOper extends \PHPUnit_Framework_TestCase {

 private $_conn;
 private $_dbConn;
 private $_dbOper;
 private $_query;
 private $_result;
 private $_stmt;
 private $_queryHandler;
    /**
     * setUp() will be executed per test case. A connection will be 
     * made and disconnected for every test case
     */
    public function setUp() {
      $this->_conn = new DbConn("localhost", "vicky","v1k4$","UW"); 
       }
     

   /**
    *Check whether the direct query frunction works as expected 
    */
    public function testDirectQuery() {
      $this->_query  = "Select * from user";
      $this->_dbConn = $this->_conn->connect();
      $this->_dbOper = new DbOp($this->_conn, $this->_dbConn);
      $this->_result = $this->_dbOper->querySql($this->_query);
      $this->assertEquals(11,$this->_result->num_rows);     
       //for viewing purpose only, adds no significance to the test
       //scenarios
       while ($row = $this->_result->fetch_assoc()) { 
             printf("First Name: %s , Last Name: %s \n", $row['firstname'], $row['lastname']);                     
      } 
      $this->_dbOper->closeQueryHandle();  
      $this->_conn->disconnect();
        }
         
    /**
     *Check whether the query with prepared statment works as expected  
     */    
     public function testInsert() {
      
      $params =  array(); 
      $this->_stmt   = null;
      $this->_dbConn = $this->_conn->connect();
      $this->_dbOper = new DbOp($this->_conn, $this->_dbConn);
      $this->_query = "insert into user set firstname = ? , lastname = ? ";
      $params = Array( 'ss', 'John', 'Hopkins');
      $this->assertEquals(true, $this->_dbOper->queryPrepExe($this->_query,$params)); 
      $this->_dbOper->queryPrepExeClose(); 
      $this->_conn->disconnect();
      }    
        
/** 
*Update the data in the table 
*/
   public function testUpdate(){
      $params =  array(); 
      $this->_dbConn = $this->_conn->connect();
      $this->_dbOper = new DbOp($this->_conn, $this->_dbConn);
      $this->_query = "update user set firstname = ? where firstname = ?  and lastname = ? ";
      $params = Array( 'sss', 'VV', 'John', 'Hopkins');
      $this->assertEquals(true, $this->_dbOper->queryPrepExe($this->_query,$params));
    
      $this->_dbOper->queryPrepExeClose(); 
      $this->_conn->disconnect();
    
   }
 

/**
* Query the data using prep 
*/
    public function testQuery(){
      
      $params =  array(); 
      $this->_dbConn = $this->_conn->connect();
      $this->_dbOper = new DbOp($this->_conn, $this->_dbConn);
      $this->_query = "select * from user where firstname = ? and lastname = ? ";
      $params = Array( 'ss', 'VV','Hopkins');
      $this->assertEquals(true, $this->_dbOper->queryPrepExe($this->_query,$params));
      $this->_queryHandler = $this->_dbOper->getPrepQueryHandler();
      $this->_queryHandler->bind_result($typ,$firstname, $lastname);

       while( $this->_queryHandler->fetch()) {
          printf("First name: %s , Last name: %s ",$firstname,$lastname);  
        }
     
    //whie
      //  foreach ($row as $key => $val ) { 
       //      printf("First Name: %s , Last Name: %s \n", $row['firstname'], $row['lastname']);                     
     // }
      
      $this->_dbOper->queryPrepExeClose(); 
      $this->_conn->disconnect();
    
   
        
    }   

/**
*Delete the data from the table  
*/ 
     public function testDelete(){
        
      $params =  array(); 
      $this->_dbConn = $this->_conn->connect();
      $this->_dbOper = new DbOp($this->_conn, $this->_dbConn);
      $this->_query = "delete from user where firstname = ?  and lastname = ? ";
      $params = Array( 'ss', 'VV', 'Hopkins');
      $this->assertEquals(true, $this->_dbOper->queryPrepExe($this->_query,$params));
    
      $this->_dbOper->queryPrepExeClose(); 
      $this->_conn->disconnect();
     }

   
 }
?>
