<?php

$host = "localhost";
$dbName = "studentinfo";
$userName = "root";
$password = "";

try 
{
	$conObj = new PDO("mysql:host={$host};dbname={$dbName}", $userName, $password);
	//echo "Connection success!";
} 

catch (PDOException $e) 
{
	echo "Connection error: ".$e->getMessage();
}



?>