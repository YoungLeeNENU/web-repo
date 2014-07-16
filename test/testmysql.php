<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

$num = 1;

switch ($num) {
    case 1:
        $num++;
        echo "$num <br />";
        break;
    case 2:
        $num--;
        echo "$num <br />";
        break;
    default:
        echo "Uhh... <br />";
}

?>