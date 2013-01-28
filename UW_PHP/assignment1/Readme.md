Assignment 1
============
This assignment contains 4 classes and and interface 
Classes
=======
- Vehicle.php
- Car.php
- Civic.php
- Truck.php
Interface 
=========
- Vehicle Interface.php

What was implemented
=====================
- Implemenaed three sub-classes: Car, Civic and Truck. Car and Truck implement the base class Vehicle. Civic has been derived from the Car class.
- Declared an interface named VehicleInterface, with a method called honk().
- For each of the sub-class
    - Provided a getYear() and setYear() methods that allows to set/get year
    - Implmented the honk() in VehicleInterface
        - Car and Truck class are returning an an empty string
        - Civic is returning a string 'honk honk'
        - Jeep is returning a string 'Bonk Bonk'  
