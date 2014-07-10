<?php
error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once("./select.php");
require_once("./insert.php");
?>

<html>
  <head>
	<title>Sign up | Maverick</title>
  </head>
  <body bgcolor="#171717">
	<h1 align="center">
      <font color = "#f5f5f5">
		Maverick.
      </font>
    </h1>

    <form name="signup" action="signup.php" method="post">
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
      <input type="submit" value="Sign up" />     
    </form>
    
    <form action = "http://maverick.taomee.net/login.php">
      <input type="submit" value="Log in">
    </form>

  </body>
</html>

<?php
    $db = "db_maverick";
    $table = "user_info";

    if (isset($_POST['Username'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        if (CheckUsr($username, $password, $db, $table)) {
            if (Insert_DB($username, $password, $db, $table)) {
                echo "<font color = maroon>Welcome!</font> <br />";
            }
        } else {
            echo "<font color = maroon>User name has already been uesd!</font <br />";
        }
    }
?>