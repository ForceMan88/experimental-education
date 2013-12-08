<?php
$array = range(1, 100, 10);
shuffle($array);

$array = [0, 0 ,2, 2, 2 ,81, 1, 21, 91, 51, 41, 71, 61, 31, 11];

echo "Start array = " . implode("  ", $array) . "</br>";

function quicksort($array)
{
    $wickPoint = array_shift($array);
    $smallOne = $smallTwo = array();

    foreach ($array as $value) {
        $value > $wickPoint ? array_push($smallOne, $value) : array_unshift($smallTwo, $value);
    }

    if (count(array_merge($smallTwo, $smallOne)) > 2) {
        return array_merge(quicksort($smallTwo), array($wickPoint), quicksort($smallOne));
    }

    return array_merge($smallTwo, array($wickPoint), $smallOne);
}

echo "Result array = " . implode("  ", quicksort($array));