<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once ("./select.php");
require_once ("./insert.php");
require_once ("./vercode.php");

?>

<html>
  <head>

    <style type = "text/css">
     body { padding:0;
			margin:0;
			overflow-x: hidden;
			background: url(tumblr.gif) center no-repeat;
			background-size:cover; }
    </style>
    <style type = "text/css">
     div { background: rgba(200, 54, 54, 0.5) height: 100%; }
    </style>

    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Sign up | Maverick</title>
  </head>
  <body bgcolor="#00688b">
	<h1 align="center">
      <img src = "Maverick_w.png">
    </h1>

    <script type = "text/javascript" src = validate.js></script>

    <form align="center" name="signup" action="signup.php" method="post" onsubmit="return checkForm(this);">
      <p><font color = "#f5f5f5">Username:</font>      <input type="text"     name="Username"  class="input" id="user"></p>
      <p><font color = "#f5f5f5">Password:</font>      <input type="password" name="Password1" class="input" id="pwd1"></p>
      <p><font color = "#f5f5f5">Password Again:</font><input type="password" name="Password2" class="input" id="pwd2"></p>
      <a onclick="javascript:document.signup.submit()"><img src="signup.png"></a>
	</form>

	<form name="login_s" action = "http://maverick.taomee.net/output/login.php">
	  <a onclick="javascript:document.login_s.submit()"><img src="login_s.png"></a>
	</form>

  </body>
</html>

<?php
    
$db = "db_maverick";
$table = "user_info";

/* GenCode(); */

if (isset($_POST['Username'])) {
        /* $username = stripslashes(trim($_POST['Username'])); */
    $username = $_POST['Username'];
    $password = md5($_POST['Password1']);

    if (CheckUsr($username, $password, $db, $table)) {
        if (Insert_DB($username, $password, $db, $table)) {
            echo "<font color = maroon>Welcome!</font> <br />";
        }
    } else {
        echo "<font color = maroon>User name has already been uesd!</font <br />";
    }
}

?>