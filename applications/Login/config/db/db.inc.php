<?php

/* Include der MySQL Config Daten */
require_once 'config.inc.php';

/* Verbindung zur Datenbank herstellen */
function connectToDatabase() 
{
	try {
		$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname='. DB_NAME.'', DB_USER, DB_PASS);		
		return $dbh;	
	}catch (PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}