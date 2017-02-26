<?php
$dsn = 'mysql:host=sql2.njit.edu;dbname=mt394';
$username = 'mt394';
$password = '8CVY9DrV';

	try {

		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		include('database_error.php');
		exit();
	}	
?>
