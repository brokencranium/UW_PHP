Assignment 1 - Part 2
============
This assignment contains the listed below parts

- Project skeleton as per the guidelines provided
- Namespace for every class
- Autoloading
- Unit tests for every public method

The project contains the followin list of files:
```
- Src/
    - Vehicle.php
    - VehicleInterface.php
    - Car.php
    - Civic.php
    - Truck.php
- Tests
    - Conf
        - phpunit.xml
    - Src/
        - VehicleTest.php
        - CarTest.php
        - CivicTest.php
        - TruckTest.php
- Bootstrap.php   takes care autoloading
- composer.json   Sets up autoloading, dependency (phpunit)
```
AutoLoading:
============
Bootstrap. php is used for autoloading

Unit Testing:
==============
Run the below script to for unit testing
```
./Vendors/phpunit/phpunit/composer/bin/phpunit -c Tests/Conf/phpunit.xml
```


