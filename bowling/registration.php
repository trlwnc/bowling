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

// gather registration

if(empty($_POST['first_name']))
   {
    echo '<h3>Please enter first name to login</h3>';
   }
else
{
	$first = $_POST['first_name'];
	$fn = 1;
}
if(empty($_POST['last_name']))
	{
		echo '<h3>Please enter last name to create login</h3>';
	}
else
{
	$last = $_POST['last_name'];
	$ln = 1;
}
if(empty($_POST['email']))
	{
		echo '<h3>Please enter email to create login</h3>';
	}
else
{
	$emails = $_POST['email'];
	$em = 1;
}
if(empty($_POST['password']))
	{
		echo '<h3>Please enter password to create login</h3>';
	}
else
{
//	//use for salt
//	$options = [
//		'cost' => 12,
//		'salt' => 'hellomynameischildoftheonetruekingivebeenchangedihavebeensetfreeamazinggraceisthesongisinghellomynameischildoftheonetruekingagain'
//	];
	
	$pswrd = $_POST['password'];
	$pw = 1;
	$pswrdSecure = password_hash($pswrd, PASSWORD_BCRYPT//, $options
	);
}

// Verify and move on

if(empty($fn)||empty($ln)||empty($em)||empty($pw))
{
	//cancel function
	echo '<p>Please <a href="registration-form.php">return to form</a> and fill in information completely.</p>';
}
else
{
	// Connect to database 
	include('config.php');
    $connect = mysqli_connect(SERVER, USER, PW, DB);

    if(!$connect)
    {
        exit("Error could not connect to the database.");
    }
	else
	{
		$query = "INSERT INTO bowlers (first_name, last_name, email, pass) VALUES('$first', '$last', '$emails', '$pswrdSecure');";
        $result = mysqli_query($connect, $query);
	}
	
	if(!$result)
    {
        exit("<p>Could not successfully run the query, $query</p>");
    }
	
    else
    {
        echo "<p>You have successfully created an account. please return to login to enter the league website!</p>";
    }
    
}
    
	
	
echo '<p><a href="index.php">Return to login</a></p>';
	
//options:
//key value
//cost 12
//salt helloagain