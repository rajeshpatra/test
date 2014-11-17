<!DOCTYPE html>
<html>
<head>
	<title>Creating MySQL tables.</title>
</head>
<body>
	<?php
		require "newdb.php";
		$query = "CREATE TABLE datas ( ".
			"id INT NOT NULL AUTO_INCREMENT, ".
			"name VARCHAR(100) NOT NULL, ".
			"email VARCHAR(100) NOT NULL, ".
			"mobno VARCHAR(15) NOT NULL, ".
			"password VARCHAR(100) NOT NULL, ".
			"PRIMARY KEY (id)); ";
		$table = mysql_query($query, $connect);
		if(!$table) {
			die ("Could not inserted table: ". mysql_error());
		}
		else {
			echo "Successfully inserted table.\n";
		}
		mysql_select_db('BIODATA');
	?>
	<br>
</body>
</html>