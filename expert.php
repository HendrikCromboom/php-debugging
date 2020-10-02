<?php
declare(strict_types=1);
//1
new_exercise();
function new_exercise() {
    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise ".$x." starts here:<br/>";
    echo $block;
}
echo "<br>";
//2
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

echo "<br><br>";
//3

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

echo "<br><br>";

//4


foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

echo "<br><br>";
//5

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


