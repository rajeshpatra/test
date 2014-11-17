<?php
	require "constants.php";
	$connect = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
	if (!$connect) {
		die ("Could not connect: " . mysql_error());
	}
	else {
		echo "Successfully connected to Databse.";
	}
?>