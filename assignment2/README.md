Assignment 2
============
This assignment contains the listed below parts

- Database abstraction layer
- Autoloading
- Unit tests for some public methods

The project contains the followin list of files:
```
- Src/
    - MySqliDbConn.php
    - MySqliDbOp.php
 - Tests
    - Conf
        - phpunit.xml
    - Src/
        - TestConn.php
        - TestOper.php 
        p
- Bootstrap.php   takes care autoloading
- composer.json   Sets up autoloading, dependency (phpunit)
```
AutoLoading:
============
Bootstrap. php is used for autoloading

Src Classes
============
 - MySqliDbConn: Handles the connectivity with the database and returns the handler
 - MySqlDbOp: Handles the database operations, uses the query operation as well as the prepare. Use the methods which used the query function for select statements only, the methods using the prepare can be used for insert,update,delete and select queries.Its a one stop for all type of queries. Havent tested it for complex queries.

Unit Testing:
==============
Run the below script to for unit testing
```
./Vendors/phpunit/phpunit/composer/bin/phpunit -c Tests/Conf/phpunit.xml
```


