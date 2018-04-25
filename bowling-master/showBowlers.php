<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Bowlers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  <?php
     echo '<p><a href="logout.php">Logout</a>' . " " . $_SESSION['firstName'] . '</p>';
  ?>
  <h1>Show Bowlers</h1>

<?php
include('config.php');

	$connect = mysqli_connect(SERVER, USER, PW, DB);
	
	if(!$connect)
	{
		exit("Error could not connect to database");
	}
	
	$query = "SELECT first_name, last_name from bowlers ORDER BY last_name ASC";
	$result = mysqli_query($connect, $query);
	
	if(!$result)
	{
		exit("<p>Could not successfully run the query, $query</p>");
	}
	
	if (mysqli_num_rows($result) == 0)
	{
		echo "<p>No records returned</p>";
	}
	else
	{
		echo "<h1>Bowlers</h1>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<p>{$row['first_name']} {$row['last_name']}</p>";
		}
	}
	
	// echo "<p>Connected to database</p>";
	
	mysqli_close($connect);
	?>
</body>
</html>