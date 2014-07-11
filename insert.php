<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

// Insert a new item into the databse
function Insert_DB ($name, $pswd, $db, $table) {
    $md5_pswd = md5($pswd);
    $conn = mysql_connect('localhost', 'root', 'ta0');
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db, $conn);

    $item = "insert into $table (user_name, password) values('$name', '$md5_pswd')";

    $result = mysql_query($item);
    
    mysql_close($conn);

    return $result;
}

?>