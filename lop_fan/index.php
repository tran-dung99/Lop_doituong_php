<?php
include_once "Fan.php";
$fan1 = new Fan();
$fan1->setSpeed($fan1::fast);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);
echo $fan1->toString();
echo $fan1->name;

echo"<br/>";
$fan2 = new Fan();
$fan2 ->setSpeed($fan2::medium);
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setOn(false);
echo $fan2->toString();
?>
