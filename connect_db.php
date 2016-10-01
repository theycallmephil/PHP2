<?php 

//insert user information below
const DB_HOST = 'database_host'; 
const DB_USER = 'database_username'; 
const DB_PASS = 'database_password'; 
const DB_NAME = 'database_name';
// connector til online database
$connection = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME); 

	if ($connection->connect_error) {
		die('connect_Error ('.$connection->connect_errno.') '.$connection->connect_error);
		}
$connection->set_charset('utf8');
?>	
