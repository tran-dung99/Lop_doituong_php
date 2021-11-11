<?php
include_once "StopWatch.php";
$counttime = new StopWatch();
echo $counttime->getStartTime();
$array = [];
for ($i = 0; $i < 10000; $i++) {
    $array[$i] = mt_rand(0, 10000);
}

for ($i = 0; $i < count($array); $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$minIndex] > $array[$j]) {
            $minIndex = $j;
        }
    }
    $temp = $array[$i];
    $array[$i] = $array[$minIndex];
    $array[$minIndex] = $temp;
}
print_r($array);
echo "<br>";
echo $counttime->getEndTime();
echo "<br>";
echo $counttime->getElapsedTime();
$counttime->start();
echo $counttime->getStartTime();
?>
