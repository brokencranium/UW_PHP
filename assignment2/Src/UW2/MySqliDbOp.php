<?php
/**
* All the DB db related files are stored in the namespace UW
*/
namespace UW2;
use \mysqli as mysqli;

/**
* This class does the insert, update and select operations 
*/
class MySqliDbOp {

/**
*Variable declarations 
* @var result string
* @var mySqli string  
*/
private $_conn,
        $_result,
        $_mySqli;
/**
* Set the required parameters to establish a connection with the database 
* @var im_mysqli  string  
*/
public function __construct($im_conn, $im_mysqli) {
        $this->_conn = $im_conn;
        $this->_mySqli = $im_mysqli;
        
        if(!$this->_mySqli) { 
          throw new \Exception("Need a handler to the MySqliDbConn databse");
       }
        
        if(!$this->_conn) { 
          throw new \Exception("Need a handler to the MySqliDbConn");
       }

       if(!$this->_conn->isConnected()){
           throw new \Exception("Unable to connect to the database " . $this->_conn->getDbName());
       
      }
// set auto commit to fals, the controller needs to call
//  the commit handler provided
//       $this->_mySqli->autocommit(false);
    }


/** 
* Executes the SQL statement that was passed to 
* Returns the mysqli_array for the controller 
* to parse the data based on the requirement
* @var    string
* @return mysqli_result set 
*/
public function querySql($im_sqlQuery){
         echo($im_sqlQuery);
         $this->_result = $this->_mySqli->query($im_sqlQuery);                 
         if($this->_result->num_rows == 0){
            throw new \Exception('No records found');
         }
         return $this->_result;      
        } 



/**
* Execute the query by preparing the statment first 
* tvar String
* @var Array(, , ,)
*/
 public function queryPrepExe($im_query,$im_params ){
   $this->_stmt = null;  
   $this->_stmt = $this->_mySqli->prepare($im_query);
   $_ref = new \ReflectionClass('mysqli_stmt');
   $_method = $_ref->getMethod('bind_param');
   $_method->invokeArgs($this->_stmt,$im_params);
   return  $this->_stmt->execute();
}

/**
* Get the _stmt handler for accessing the parmeters 
*/ 
   public function getPrepQueryHandler() {
      return $this->_stmt; 

     }

/**
*Close Query prep exe handle 
*/
 public function queryPrepExeClose() {
    if(!$this->_stmt){
      throw new \Exception('The query object is invalid and cannot be closed');
    }
   $this->_stmt->close();
   }

/**
* The query result needs to be closed before triggering 
* another one
*/
public function closeQueryHandle(){
       
         if(!$this->_result) {

            throw new \Exception('The result object is invalid and cannot be closed');
          }
          $this->_result->close();
       
       }


/**
* Commit the data to the tables 
*/
public function commitData(){
         if(!$this->_mySqli) {
            throw new \Exception('The mysqli object is invalid so cannot commit');
          }
           $this->_mySqli->commit();

       }


   }
?>
