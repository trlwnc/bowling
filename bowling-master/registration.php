<?php

include 'config.php';

$connect = mysqli_connect(SERVER, USER, PW, DB);

if(!$connect)
{
    exit("Error could not connect to the database.");
}

else 
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $pass2 = $_POST['pass2']; 

    // need to test if passwords match
    
    $pass = password_hash($pass, PASSWORD_BCRYPT);

    $query = "INSERT INTO bowlers (first_name, last_name, email, pass) VALUES ('$firstName', '$lastName', '$email', '$pass')";

    echo $query;

    $result = mysqli_query($connect, $query);
}
