<?php
if(file_exists("card.png")) {
  $load = imagecreatefrompng("card.png");
}
else {
  $load = imagecreatetruecolor(229, 150);
}
function win() {
unlink("card.png");
imagedestroy($load);
$load = imagecreatetruecolor(229, 150);
imagepng($load, "card.png");
header("Content-type: image/png");
imagepng($load);
}
$color = imagecolorallocate($load, rand(0, 255), rand(0, 255), rand(0, 255));
$x1 = rand(0, 229);
$x2 = rand(0, 229);
$y1 = rand(0, 150);
$y2 = rand(0, 150);
imageline($load, $x1, $y1, $x2, $y2, $color) or win();
imagepng($load, "card.png") or win();
header("Content-type: image/png");
imagepng($load);
?>