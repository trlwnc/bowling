<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bowling Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 

if(empty($_POST['email']) || empty($_POST['pass']) )
{
    echo '<p>Please enter a first and last name to login</p>';
    echo '<p><a href="index.php">Return to login</a></p>';
}

else
// first round is okay -- gather variables and run the query
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // database code -- need to refactor
    include('config.php');
    $connect = mysqli_connect(SERVER, USER, PW, DB);

    if(!$connect)
    {
        exit("Error could not connect to the database.");
    }

    else
    // all is good -- time to run the query
    {
        $query = "SELECT first_name, last_name from bowlers WHERE email = '$email' AND pass = '$pass';";
        $result = mysqli_query($connect, $query); 
        
        // moved this line to here 
        $row = mysqli_fetch_assoc($result);
    }
    
    if(!$result)
    {
        exit("<p>Could not successfully run the query, $query</p>");
    }

    // need to test this
    elseif(count($row['email']) == 0)
    {
        echo 'No result returned for the query ' . $query;
	}

    else
    // Good to go!
    {
        // had to move this -- show class
        //$row = mysqli_fetch_assoc($result);
        // Next up is to create a session
        $_SESSION['firstName'] = $row['first_name'];

        echo '<p><a href="logout.php">Logout</a>' . " " . $_SESSION['firstName'] . '</p>';
        echo '<p><a href="showBowlers.php">Show Bowlers</a></p>';

		// echo'<p>Test to see the session firstName: '. $_SESSION['firstName'] . '</p>';

    }

}

?>
</body>
</html>