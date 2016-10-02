<?php 
header( "Content-type: image/png" );
$my_img = imagecreate(100, 100);
$background = imagecolorallocate($my_img, rand(0,255), rand(0,255), rand(0,255));
$text_color = imagecolorallocate($my_img, rand(0,255), rand(0,255), rand(0,255));

imagestring($my_img, 5, 15, 40, "PHP IMAGE", $text_color);

imagepng($my_img);
imagecolordeallocate($text_color);
imagecolordeallocate($background);
imagedestroy($my_img)
 ?>