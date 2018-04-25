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
        <p>First<input type="text" name="firstName" required></p>
        <p>Last<input type="text" name="lastName" required></p>
        <p>Email<input type="email" name="email" required></p>
        <p>Password<input type="password" name="pass1" required></p>
        <p>Password<input type="password" name="pass2" required></p>
        <p><input type="submit" value="Register"> </p>

    </form>
</body>
</html>