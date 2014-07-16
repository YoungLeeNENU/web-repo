<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

function CookieSet($name, $value) {
    setcookie($name, $value);
}

?>