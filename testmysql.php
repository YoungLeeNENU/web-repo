<?php
$conn = mysql_connect('localhost', 'root', 'ta0');

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

mysql_close($conn);
?>