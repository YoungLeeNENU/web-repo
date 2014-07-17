<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once ("./select.php");
require_once ("./insert.php");
require_once ("./vercode.php");

?>

<html>
  <head>

    <link rel="shortcut icon" href="maverickico.ico" type="image/x-icon" />
    
    <style type = "text/css">
     body {
	   padding:0;
	   margin:0;
	   overflow-x: hidden;
	   background: url(tumblr.gif) center no-repeat;
	   background-size:cover;
	 }
    </style>
	
    <style type = "text/css">
     div {
	   background: rgba(200, 54, 54, 0.5) height: 100%;
	 }
    </style>

    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	
	<title>
	  Sign up | Maverick
	</title>
	
  </head>

  <body bgcolor="#00688b">
	
	<div id="page">
	  
	  <div id="siteid" align="center" style="margin-top:5cm">
		<h1 align="center">
		  <img src = "Maverick_w.png">
		</h1>
	  </div>

	  <div id="signup" align="center">
		<script type = "text/javascript" src = validate.js></script>
		<form align="center" name="signup" action="signup.php" method="post" onsubmit="return checkForm(this);">
		  <p>
			<input type="text" style="width:205px; height:33px; background:#fff8dc" name="Username" class="input" id="user" placeholder="Username">
		  </p>
		  <p>
			<input type="password" style="width:205px; height:33px; background:#fff8dc" name="Password1" class="input" id="pwd1" placeholder="Password">
		  </p>
		  <p>
			<input type="password" style="width:205px; height:33px; background:#fff8dc" name="Password2" class="input" id="pwd2" placeholder="Enter password again">
		  </p>
		  <a onclick="javascript:document.signup.submit()">
			<img src="signup.png">
		  </a>
		</form>
	  </div>

	  <div id="login" style="margin-left:1.5cm; margin-top:10cm">
		<form name="login_s" action = "http://maverick.taomee.net/output/login.php">
		  <a onclick="javascript:document.login_s.submit()"><img src="login_s.png"></a>
		</form>
	  </div>
	  
	</div>

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