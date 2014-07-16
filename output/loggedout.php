<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

session_start();

require_once("./update.php");

?>

<html>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Logged out | Maverick</title>
  </head>
  <body bgcolor="#00688b">
	<h1 align="center">
      <font color = "#f5f5f5" size = 10>
		Maverick.
      </font>
    </h1>

	<h1 align="center">
      <font color = "#f5f5f5" size = 6>
		Logged out!
      </font>
    </h1>
    
  </body>
</html>

<?php

$db = "db_maverick";
$table = "user_info";

UpdateStatus($_SESSION['usr'], $db, $table);

unset($_SESSION['usr']);

?>
