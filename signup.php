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
  <body bgcolor="#00688b">
	<h1 align="center">
      <font color = "#f5f5f5" size = 10>
		Maverick.
      </font>
    </h1>

    <input type="button"
    style="width:200px;height:40px; background-color:#f5f5f5; color=#e0eee0"
    value="SIGN UP" name="bt">
    <input type="button"
    style="width:200px;height:40px; background-color:#f5f5f5; color=#e0eee0"
    value="LOG IN" name="bt">
    
	  <script type="text/javascript">
        function checkForm(form)
        {
        	if(form.Username.value == "") {
        		alert("Error: Username cannot be blank!");
        		form.Username.focus();
        		return false;
        	}
        	re = /\w+/;
        	if(!re.test(form.Username.value)) {    // 用户名只能为英文字母
        		alert("Error: Username must contain only letters, numbers and underscores!");
        		form.Username.focus();
        		return false;
        	}
        
        	if(form.Password.value.length < 6) {
        		alert("Error: Password must contain at least six characters!");
        		form.Password.focus();
        		return false;
        	}
        	re = /\d+/;
        	if(!re.test(form.Password.value)) {
        		alert("Error: password must contain at least one numer!");
        		form.Password.focus();
        		return false;
        	}
        	re = /[a-zA-Z]/;
        	if(!re.test(form.Password.value)) {
        		alert("Error: password must contain at least one letter!");
        		form.Password.focus();
        		return false;
        	}							

        	return true;
        }
	  </script>

    <form name="signup" action="signup.php" method="post" onsubmit="return checkForm(this);">
      <font color = "#f5f5f5">Username:</font>
      <input type="text" name="Username" />
      <br />
      <font color = "#f5f5f5">Password:</font>
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