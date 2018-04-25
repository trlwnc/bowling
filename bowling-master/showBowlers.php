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
  <h1>Show Bowlers Stub</h1>
  <p>Stubs are just placeholders. No need to show the bowlers yet.</p>
</body>
</html>