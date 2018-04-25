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
    echo '<p>Please enter an email and password to login</p>';
    echo '<p><a href="index.php">Return to login</a></p>';
}

else
// first round is okay -- gather variables and run the query
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // database code -- need to refactor
    include 'config.php';
    $connect = mysqli_connect(SERVER, USER, PW, DB);

    if(!$connect)
    {
        exit("Error could not connect to the database.");
    }

    else
    // all is good -- time to run the query and test the password
    {
            // first retrieve the bowler
            $query = "SELECT * from bowlers WHERE email = '$email'"; 
            $result = mysqli_query($connect, $query);

            // put the result in an array called row
            $row = mysqli_fetch_assoc($result);

            // test that only one row was returned
            if(count($row['email']) == 0)
           
                echo "<p>No record found with the email $email.</p>";

            else
            {
                // test the password

                $hash = $row['pass'];

                if(password_verify($pass, $hash))
                {
                    // success
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['pass'] = $row['pass'];

                    echo '<p><a href="logout.php">Logout</a>' . " " . $_SESSION['email'] . '</p>';
                    echo '<p><a href="showBowlers.php">Show Bowlers</a></p>';

                }

                else
                    echo "<p>Passwords do not match.</p>";

            }

        }

    }



?>
</body>
</html>