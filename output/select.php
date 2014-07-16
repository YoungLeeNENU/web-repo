<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once("./safe.php");

// Check an item in the databse
function CheckPswd($name, $pswd, $db, $table) {
    if (KeepSafe($name)) {
        $conn = mysql_connect('localhost', 'root', 'ta0');
        $counter = 0;
        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db($db, $conn);

        $query = "select password from $table where user_name = '$name'";

        $result = mysql_query($query);

        # for (; $row = mysql_fetch_array($result); $counter++) {
        #     echo $row['password'];
        #     echo "<br />";
        # }

        while ($row = mysql_fetch_array($result)) {
            $db_pswd = $row['password'];
            $counter++;
        }

        mysql_close($conn);

        if ($counter == 1) {
            if ($db_pswd == $pswd) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function CheckUsr($name, $pswd, $db, $table) {
    if (KeepSafe($name)) {
        $conn = mysql_connect('localhost', 'root', 'ta0');
        $counter = 0;
        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db($db, $conn);

        $query = "select * from $table where user_name = '$name'";

        $result = mysql_query($query);

        while ($row = mysql_fetch_array($result))
            $counter++;

        mysql_close($conn);
    
        if ($counter == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

?>