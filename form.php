<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<?php
	require "newdb.php";
	if(isset($_POST['submit']))
		// 
		// after POST what should I write? the id="add" or name="submit" as in form.
		// 
		{
			
			$query = "INSERT INTO data " .
			"(name, email, mobno, password) " .
			"VALUES " .
			"('{$name}', '{$email}', '{$mobno}', '{$pass}')";
			$insert = mysql_query($query, $connect);
			if (!$insert)
			{
				die('Could not inserted to database.: ' . mysql_error());
			}
			else 
			{
				echo "Successfully inserted data.\n";
			}
		}
	else 
	{
		?>
			<h3>About You.</h3>
			<br>
			<form method="post" action="form.php">
			<!-- what's action=""? I just copied from web. -->
				<table>
					<tr>
						<td><label>Name: </label></td>
						<td><input type="text" id="username" name="name" placeholder="E.g Kumar Abinash"></input><br></td>
					</tr>
					<tr>
						<td><label>E-mail: </label></td>
						<td><input type="text" id="useremail" name="email" placeholder="example@example.com"></input><br></td>
					</tr>
					<tr>
						<td><label>Mobile No: </label></td>
						<td><input type="text" id="usermobno" name="mobno" placeholder="9876543210" maxlenght="10"></input><br></td>
					</tr>
					<tr>
						<td><label>Password: </label></td>
						<td><input type="password" id="userpass" name="pass" placeholder="Don't disclose it"></input><br></td>
					</tr>
					<tr>
						<td><label>Confirm Password: </label></td>
						<td><input type="password" id="usercpass" name="cpass" placeholder="Type your password again"></input><br></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" id="add" name="submit" value="Save"></input></td>
					</tr>
				</table>
			</form>
		<?php
	}
	?>
</body>
</html>
