<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<?php
		require "newdb.php";
		if (isset($_POST['login'])) {
			$lemail = $_POST['lemail'];
			$lpass = $_POST['lpass'];
			$query2 = "SELECT * FROM data WHERE $lemail=$email AND $lpass=$pass";
			$login = mysql_querry($query2, $connect);
			if(!$login) {
				die('LOGIN ERROR. Check your E-mail & Password again.' . mysql_error());
			}
			else {
				echo "Hello " . $lemail . " !";
			}
		}
		else {
			?>
			<h3>Hey there! Login in to your account.</h3>
			<form method="post" action="login.php">
				<table>
					<tr>
						<td><label>E-mail</label></td>
						<td><input type="text" name="lemail" id="email" placeholder="example@example.com" required="required"></input></td>
					</tr>
					<tr>
						<td><label>Password</label></td>
						<td><input type="password" name="lpass" id="pass" placeholder="Your password" required="required"></input></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="login" id="login" value="LOGIN"></input></td>
					</tr>
				</table>
			</form>
			<?php
		}
	?>
</body>
</html>