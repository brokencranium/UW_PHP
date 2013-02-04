<?php
/**
* All the DB db related files are stored in the namespace UW
*/
namespace UW2;
use \mysqli as mysqli;

class MySqliDbConn {

/**
*Variable declarations 
* @var uname  string
* @var pwd    string 
* @var dbname string 
* @var host   string  
*/
private $_uname;
private $_pwd;
private $_dbname;
private $_host;
private $_mysqli;

/**
* Set the required parameters to establish a connection with the database 
* @var im_uname  string  
* @var im_pwd    string 
* @var im_dbname string 
* @var im_host   string
*/
public function __construct($im_host, $im_uname, $im_pwd, $im_dbname) {

	$this->_uname  = $im_uname;
	$this->_pwd    = $im_pwd;
	$this->_dbname = $im_dbname;
	$this->_host   = $im_host;

       }

/**
* Connect to the database using the parmaeters provided for the constructor 
* @return string 
*/
public function connect(){
      
       $this->_mysqli = new mysqli($this->_host, $this->_uname, $this->_pwd, $this->_dbname); 
       if ( $this->_mysqli->connect_errno) {
            throw new \Exception('Unable to connect to MYSQL' . $this->_mysqli->connect_error); 
          }
      return $this->_mysqli;
     }


/**
*Check whether an active connection exists with the calling handler
* @return boolean 
*/
public function isConnected(){
          return ($this->_mysqli) ? true : false;
       } 

/** 
* Get the databse that is being connected to
* @return string
*/
public function getDbName() {
         return $this->_dbname;

       } 
/**
* Handler to disconnect from the database 
* Call destruct which will disconnect the db connections
*/
public function disconnect() {
      $_dbClose = false;
      if($this->_mysqli) {
         $_dbClose = $this->_mysqli->close();
         $this->_mysqli = null;
         
         if (!$_dbClose){
             throw new \Exception('Unable to close the db conn for ' . $this->_uname . $this->_dbname . $this->_host);
             } 

       	  $this->_uname  = null;
	  $this->_pwd    = null;
	  $this->_dbname = null;
	  $this->_host    = null;
          $_mysqli = null;
        }

       }

/** 
* Close the connection and set the handlers to null , just in case ...
*/
public function __destruct(){
          $this->disconnect();
           }  

}

?>
