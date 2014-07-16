<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

session_start();

?>

<html>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Logged in | Maverick</title>
  </head>
  <body bgcolor="#00688b">
	<h1 align="center">
      <font color = "#f5f5f5" size = 10>
		Maverick.
      </font>
    </h1>

    <?php
    echo $_SESSION['usr'];
    ?>

	<h1 align="center">
      <font color = "#f5f5f5" size = 6>
		Logged in!.
      </font>
    </h1>

    <p><button onclick="javascript:window.location.href='./loggedout.php';">Log out</button></p> 

  </body>
</html>
