<?php
namespace Util;
class StringUtil { 
/**
*Is input string null or empty
*@param string value
*@return boolean
*/
public static function isNullOrEmpty( $value ) {
   if( NULL === $value )  {
         return true;
      } 

   if( "" === $value ) {
            return true;
      }
  
if( is_array($value) && count($value) === 0 ){
      return true;
   }

    return false;
  }
}
?>
