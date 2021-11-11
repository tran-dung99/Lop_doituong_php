<?php
include_once "class.php";
$logic = new QuadraticEquation(1,3,1);
echo $logic->getRoot();
echo"<br/>";
$math = new QuadraticEquation(1,2,1);
echo $math->getRoot();
?>
