<?php 

$host   = "localhost";
$user   = "root";
$pass   = "guitare83";
$dbname = "maintenanceproof_database";
$db2     = null;

	//try to connect to the database using the provided credentials
  //if the connection works, it will keep the persistence, else it will throw an error
try {
    #PDO_MYSQL is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to MySQL databases.
	$db2 = new PDO( "mysql:host=$host;dbname=$dbname", $user, $pass );
	$db2->exec("set names utf8");
}catch (Exception $e){
	die("Database Connection Error: " . $e->getMessage());
}


?>