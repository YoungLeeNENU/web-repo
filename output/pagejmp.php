<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

function Pagejmp($url) {
    echo "<script language='javascript' type='text/javascript'>";  
    echo "window.location.href='$url'";  
    echo "</script>";
}

?>