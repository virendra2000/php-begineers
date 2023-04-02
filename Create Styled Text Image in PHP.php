<?php
// Create an empty image
$im = imagecreatetruecolor(800, 250);
// Add text using a font from local file
imagettftext($im, 90, 0, 100, 100, imagecolorallocate($im, 0, 0, 255),
'Pacifico.ttf', 'Geeky Shows');
// Output to browser
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);
?>
