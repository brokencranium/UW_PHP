<?php
session_start();

//require('registry/registry.class.php');

//$registry = new Registry();

//$registry->createAndStoreObject( 'template', 'template' );
//$registry->getObject('template')->parseOutput();

$template = new Template();

print $template->getObject('template')->getPage();

?>