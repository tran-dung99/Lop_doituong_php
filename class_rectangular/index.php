<?php
include_once "class.php";
$width = 20;
$height = 10;
$rectangle = new Rectangle($width,$height);
$rectangle->width = 20;
$rectangle->height = 30;
echo $rectangle->getArea();
echo "<br/>";
echo $rectangle->getPerimeter();
echo "<br/>";
echo $rectangle->display();
?>
