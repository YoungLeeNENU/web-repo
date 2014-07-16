<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

session_start();

Header("Content-type: image/PNG");

$im = imagecreate(44, 18);    /* Generate image, size is 44 * 18  */
$back = ImageColorAllocate($im, 245, 245, 245);    /* Generate background color for $im, RGB is 245, 245, 245 */
imagefill($im, 0, 0, $back);    /* fill $im with color of $back */
$vcodes = "";    /* The numbers */
srand((double)microtime()*1000000);    /* parameter is the seed */

/* Draw the numbers */
for ($i = 0; $i < 4; $i++) {
    $font = ImageColorAllocate($im, rand(100, 255), rand(0, 100), rand(100, 255));
    $authnum = rand(1, 9);
    $vcodes .= $authnum;
    imagestring($im, 5, 2 + $i * 10, 1, $authnum, $font);
}

$_SESSION['VCODE'] = $vcodes;

/* Draw 100 pixels by random */
for ($i = 0; $i < 100; $i++) {
    $randcolor = ImageColorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($im, rand() % 70, rand() % 30, $randcolor);
}

ImagePNG($im);
ImageDestroy($im);

?>