<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

session_start();

require_once("./select.php");
require_once("./insert.php");
require_once("./update.php");
require_once("./pagejmp.php");
require_once("./cookie.php");

?>

<html>
  <head>
    <style type = "text/css">body{
    padding:0;  
    margin:0;  
    overflow-x: hidden;  
    background:url(air.jpg) center no-repeat;  
    background-size:cover;}</style>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Log in | Maverick</title>
  </head>
	<h1 align="center">
    <img src = "Maverick_w.png">
    </h1>

    <form align="center" name="login" action="login.php" method="post">
      <p><font color = "#f5f5f5">Username:</font><input type="text"     name="Username" class="input" id="user"></p>
      <p><font color = "#f5f5f5">Password:</font><input type="password" name="Password" class="input" id="pwd"></p>
      <a onclick="javascript:document.login.submit()"><img src="login.png"></a>
    </form>
    
    <form name="signup_s" action = "http://maverick.taomee.net/output/signup.php">
      <a onclick="javascript:document.signup_s.submit()"><img src="signup_s.png"></a>
    </form>

  </body>
</html>
    
<?php

$db = "db_maverick";
$table = "user_info";

if (isset($_POST['Username'])) {
    $username = $_POST['Username'];
    $password = md5($_POST['Password']);

    $_SESSION['usr'] = $username;

    if (CheckPswd($username, $password, $db, $table)) {
        switch (CheckStatus($username, $password, $db, $table)) {
            case 1:    // Logged in
                echo "<font color = maroon>User had already logged in!</font> <br />";
                break;
            case 0:    // Haven't logged in
                UpdateStatus($username, $db, $table);
                Pagejmp("./loggedin.php");
                break;
            default:    // CheckStatus error
                echo "<font color = maroon>You may not get logged in!</font> <br />";
                /* echo "<font color = maroon>You may not get logged in!</font> <br />"; */
        }

            /* @TODO js can be added here, logged in infos and page jump */
    } else {
        echo "<font color = maroon>Password error!</font> <br />";
        /* printf("<h1 align="center"><font color = "#f5f5f5" size = 6>Can't log in!</font></h1>"); */
    }
}

?>