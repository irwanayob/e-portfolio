 <?php
// Opens a connection to the database
// !!! It should be saved outside of the main web documents folder
// and imported when needed

/*
Command that gives the database user the least amount of power
as is needed when you decide to create one.
GRANT INSERT, SELECT, DELETE, UPDATE ON test3.*
TO 'user'@'host'
IDENTIFIED BY 'user_password';
SELECT : Select rows in tables
INSERT : Insert new rows into tables
UPDATE : Change data in rows
DELETE : Delete existing rows (Remove privilege if not required)
*/

// Defined as constants so that they can't be changed
// My credential as created in epziy host
DEFINE ('DB_USER', 'epiz_23345434');
DEFINE ('DB_PASSWORD', 'Kdw3dVs8w5T');
DEFINE ('DB_HOST', 'sql204.epizy.com');
DEFINE ('DB_NAME', 'epiz_23345434_test2');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
