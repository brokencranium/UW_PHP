<?php
/**
*This class uses the Car, truck and Civic classes to 
*determine the year of make and the type of honk
*/

/**
*Import the Car,Truck,Jeep and the Civic classes 
*/
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Civic.php';
require_once 'Jeep.php';
/**
*Creat car,truck,Jeep and civic objects 
*/
$_car = new Car();
$_truck = new Truck();
$_civic = new Civic();
$_jeep  = new Jeep();

/*
*Set the year for the car,truck, jeep and civic 
*/
$_car->setYear(1980);
$_truck->setYear(1995);
$_civic->setYear(2005);
$_jeep->setYear(2012);

/**
*Display the output year for the car, truck, jeep and the civic 
*/
var_dump($_car->getYear());
var_dump($_truck->getYear());
var_dump($_civic->getYear());
var_dump($_jeep->getYear());

/**
*Display the honk for the car,truck,jeep and the civic 
*/
var_dump($_car->honk());
var_dump($_truck->honk());
var_dump($_civic->honk());
var_dump($_jeep->honk());
?>
