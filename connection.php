<?php
	$connect = mysql_connect(localhost, root, password);
	if (!$connect) {
		die ("Could not connect: " . mysql_error());
	}
	echo "Successfully connected to Databse."
?>