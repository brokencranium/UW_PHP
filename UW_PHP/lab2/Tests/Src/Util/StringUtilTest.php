<?php
namespace Tests\Util;
use \Util\StringUtil as StringUtil;
require_once ('PHPUnit/Framework/TestCase.php');

class StringUtilTest extends \PHPUnit_Framework_TestCase {
 
/**
*Set up data for testing
*/
public function getTestArgs(){
return array(
             array(null, true),
             array('', true),
             array('abc',false),
             array('1243',false),
             array(array(),true),
            );
}

/**
* @dataProvider getTestArgs()
*/
public function testString($inp,$expOut){
 $this->assertSame($expOut, StringUtil::isNullOrEmpty($inp));
}
}
?>
