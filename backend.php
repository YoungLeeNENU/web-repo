<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once("./select.php");
require_once("./insert.php");

if (isset($_POST['Username'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    printf ("<font color = red>%s</font> <br />", $username);
    printf ("<font color = red>%s</font> <br />", $password);
}

?>