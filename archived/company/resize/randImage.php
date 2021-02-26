<?php
header("Content-type: image/png");
$img = imagecreatetruecolor(100,100);

$ink = imagecolorallocate($img,255,255,255);

for($i=0;$i<100;$i++) {
  for($j=0;$j<100;$j++) {
  imagesetpixel($img, rand(1,100), rand(1,100), $ink1);
  }
}

imagepng($img);
	//imagedestroy($img);

?>