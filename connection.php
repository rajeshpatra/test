<!DOCTYPE html>
<html>
<head>
	<title>MySql</title>
</head>
<body>
	<?php
		$connect = mysql_connect(localhost, user, password);
		if(!$connect) {
			die("Could not connect: " . mysql_error());
		}
		echo "Connected Successfully."
	?>
</body>
</html>