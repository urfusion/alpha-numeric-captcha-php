
 $RandomStr = md5(microtime());// md5 to generate the random string
 $ResultStr = substr($RandomStr,0,8);
 $im = @imagecreate(110, 20)
 or die("Cannot Initialize new GD image stream");
 $background_color = imagecolorallocate($im, 0, 0, 0);
 $text_color = imagecolorallocate($im, 233, 14, 91);
 imagestring($im, 1, 5, 5, $RandomStr, $text_color);
 imagejpeg($im,$ResultStr.'.jpg');
 imagedestroy($im);
//echo ''.$randval.'';
