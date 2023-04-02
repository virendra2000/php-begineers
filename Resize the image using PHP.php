<?php
// Assign image file to variable
$image_name =
'http://assets.stickpng.com/images/580b57fcd9996e24bc43c51f.png';
// Load image file
$image = imagecreatefrompng($image_name);
// Use imagescale() function to scale the image
$img = imagescale( $image, 500, 400 );
// Output image in the browser
header("Content-type: image/png");
imagepng($img);
?>
