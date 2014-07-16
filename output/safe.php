<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

function KeepSafe ($name) {
    $cliname = $name;
    $srvname = stripslashes(trim($name));
    if ($cliname == $srvname) {
        return true;
      } else {
        return false;
    }
}

?>