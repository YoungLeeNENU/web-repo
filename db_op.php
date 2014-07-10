<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

require_once("./select.php");
require_once("./insert.php");

Insert_DB("food", "food", "db_maverick", "user_info");

if (CheckPswd("linkie", "linkie", "db_maverick", "user_info")) {
    print "yes <br />";
} else {
    print "no <br />";
}

if (CheckUsr("violet", "violet", "db_maverick", "user_info"))
    print "yes <br />";
else
    print "no <br />";
if (CheckUsr("food", "blabla", "db_maverick", "user_info"))
    print "yes <br />";
else
    print "no <br />";
if (CheckUsr("food", "food", "db_maverick", "user_info"))
    print "yes <br />";
else
    print "no <br />";

?>