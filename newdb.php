<?php
	require "connection.php";
	// $query = "CREATE DATABASE BIODATA";
	// $biodata = mysql_query($query, $connect);
	// if(!$biodata) {
	// 	die('Could not create databse: ' . mysql_error());
	// }
	// echo "Database successfully created.";

	$query1 = mysql_select_db('BIODATA');
	if (!$query1) {
		die('Could not select database: ' . mysql_error());
	}
	else {
		echo "Successfully selected database.";
	}
?>