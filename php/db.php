<?php
$dsn 		= 'mysql:dbname=site_wis;host=localhost;charset=utf8';
$username 	= 'root';
$password 	= '';

try {
	$db = new PDO($dsn, $username, $password);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	unset($dsn);
	unset($username);
	unset($password);
} 
catch (PDOException $e){
	printf("Erreur de connexion : %s\n", $e->getMessage());
}