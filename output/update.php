<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once("./safe.php");

// Check
function CheckStatus ($name, $pswd, $db, $table) {
    if (KeepSafe($name)) {
        $conn = mysql_connect('localhost', 'root', 'ta0');
        if (!$conn) {
            die ('Couldn not connect: ' . mysql_error());
        }

        mysql_select_db($db, $conn);

        $query = "select status from $table where user_name = '$name'";

        $status_set = mysql_query($query);

        $row = mysql_fetch_array($status_set);
        $status = $row['status'];
    
        return $status;
    } else {
        return -1;
    }
}

// Update
function UpdateStatus ($name, $db, $table) {
    if (KeepSafe($name)) {
        $conn = mysql_connect('localhost', 'root', 'ta0');
        if (!$conn) {
            
            die ('Couldn not connect: ' . mysql_error());
        }

        mysql_select_db($db, $conn);

        $update = "update $table set status=status^1 where user_name='$name'";
        
        $result = mysql_query($update);

        mysql_close($conn);

        return $result;
    } else {
        return false;
    }
}

?>