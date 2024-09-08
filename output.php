<?php
$img = $_FILES['fdocument']['name'];
echo $img;
$imgSize = $_FILES['fdocument']['size'];
echo $imgSize;
$img_ext = pathinfo($img, PATHINFO_EXTENSION);
echo $img_ext;
?>
