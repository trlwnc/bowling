<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bowling Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Bowler Registration</h1>
    <form action="registration.php" method="post">
        <table>
			<tr><td>first name</td><td><input type="text" name="first_name" /></td></tr>
			<tr><td>last name</td><td><input type="text" name="last_name" /></td></tr>
			<tr><td>email</td><td><input type="text" name="email" /></td></tr>
			<tr><td>password</td><td><input type="password" name="password" /></td></tr>
			<tr><td></td><td><input type="submit" value="login"/></td></tr>
		</table>
    </form>
</body>
</html>