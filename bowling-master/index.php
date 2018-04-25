<?php
  session_start();
  if (isset($_SESSION['firstName']))
  {
  
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 


    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
    exit;
    // Redirect to the index

  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>10Pin</title>
</head>
<body>
  <h1>10Pin</h1>
  
  <p><a href="registration-form.php">Registration</a></p>
  
  <h2>Login</h2>
    <form action="login.php" method="post">
      email&nbsp;<input type="text" name="email" /><br>
      pass&nbsp;<input type="text" name="pass" /><br>
      <input type="submit" value="login"/>
    </form>



    <?php echo '<p>Test to see the session firstName: '. @$_SESSION['firstName'] . '</p>'; ?>




</body>
</html>