<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body>
	<h2>Enter the first name, last name, email, and password to register</h2>
	
	<form action="registration.php" method="post">
  		<table>
			<tr><td>first name</td><td><input type="text" name="first_name" /></td></tr>

			<tr><td>last name</td><td><input type="text" name="last_name" /></td></tr>

			<tr><td>email</td><td><input type="text" name="email" /></td></tr>

			<tr><td>password</td><td><input type="password" name="password" /></td></tr>
		  
			<tr><td></td><td><input type="submit" value="login"/></td></tr>
		</table>
    </form>
    
    <a href="index.php">Home</a>
    
</body>
</html>