<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 'On' );

function GenCode() {
    Header("Content-type: image/PNG");
    
        /* Generate image, size is 44 * 18  */
    $im = imagecreate(44, 18);
        /* Generate background color for $im, RGB is 245, 245, 245 */
    $back = ImageColorAllocate($im, 245, 245, 245);
        /* fill $im with color of $back */
    imagefill($im, 0, 0, $back);
        /* parameter is the seed */
    srand((double)microtime()*1000000);

        /* Draw the numbers */
    for ($i = 0; $i < 4; $i++) {
        $font = ImageColorAllocate($im, rand(100, 255), rand(0, 100), rand(100, 255));
        $authnum = rand(1, 9);
        imagestring($im, 5, 2 + $i * 10, 1, $authnum, $font);
    }

        /* Draw 100 pixels by random */
    for ($i = 0; $i < 100; $i++) {
        $randcolor = ImageColorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
        imagesetpixel($im, rand() % 70, rand() % 30, $randcolor);
    }

    ImagePNG($im);
    ImageDestroy($im);
}

?>