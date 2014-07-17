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

    <link rel="shortcut icon" href="maverickico.ico" type="image/x-icon" />

    <style type = "text/css">body{
       padding:0;
       margin:0;
       overflow-x: hidden;
       background:url(air.jpg) center no-repeat;
       background-size:cover;}</style>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Log in | Maverick</title>

  </head>

  <body>

	<div id="page">

	  <div id="siteid" align="center" style="margin-top:5cm">
		<h1 align="center">
		  <img src = "Maverick_w.png">
		</h1>
	  </div>

	  <div id="login" align="center">
		<form align="center" name="login" action="login.php" method="post">
		  <p>
			<input type="text" style="width:205px; height:33px; background:#fff8dc" name="Username" class="input" id="user" placeholder="Username">
		  </p>
		  <p>
			<input type="password" style="width:205px; height:33px; background:#fff8dc" name="Password" class="input" id="pwd" placeholder="Password">
		  </p>
		  <a onclick="javascript:document.login.submit()"><img src="login.png"></a>
		</form>
	  </div>

	  <div id="signup" style="margin-left:1.5cm; margin-top:11.3cm">
		<form name="signup_s" action = "http://maverick.taomee.net/output/signup.php">
		  <a onclick="javascript:document.signup_s.submit()"><img src="signup_s.png"></a>
		</form>
	  </div>

	</div>

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