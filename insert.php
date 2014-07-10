<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

// Insert a new item into the databse
function Insert_DB ($name, $pswd, $db, $table) {
    $conn = mysql_connect('localhost', 'root', 'ta0');
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db, $conn);

    $item = "insert into $table (user_name, password) values('$name', '$pswd')";

    $result = mysql_query($item);
    
    mysql_close($conn);

    return $result;
}

?>