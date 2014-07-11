<?php
error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once("./select.php");
require_once("./insert.php");
?>

<html>
  <head>
	<title>Log in | Maverick</title>
  </head>
  <body bgcolor="#00688b">
	<h1 align="center">
      <font color = "#f5f5f5" size = 10>
		Maverick.
      </font>
    </h1>

    <form name="login" action="login.php" method="post">
      <font color = "#f5f5f5">
		Username:
      </font>
      <input type="text" name="Username" />
      <br />
      <font color = "#f5f5f5">     
		Password:
      </font>     
      <input type="password" name="Password" />
      <br />
      <input type="submit" value="Log in" />     
    </form>
    
    <form action = "http://maverick.taomee.net/signup.php">
      <input type="submit" value="Sign up">
    </form>

  </body>
</html>

<?php
    $db = "db_maverick";
    $table = "user_info";

    if (isset($_POST['Username'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        if (CheckPswd($username, $password, $db, $table)) {
            echo "<font color = maroon>Logged in!</font> <br />";
        } else {
            echo "<font color = maroon>Can't log in!</font <br />";
        }
    }
?>
