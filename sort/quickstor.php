<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [81, 1, 21, 91, 51, 41, 61, 71, 31, 11];


echo "Start array = " . implode("  ", $array) . "</br>";

function mysort($array)
{
//    $wickPointKey = (int)(count($array) / 2);
    $wickPoint = $array[0];
    $newArray = array();
    for ($start = 0; $start < count($array); $start++) {

        if ($array[$start] > $wickPoint) {
            array_push($newArray, $array[$start]);
        } else {
            array_unshift($newArray, $array[$start]);
        }
    }

    if (count($newArray) >= 2) {
           $smallOne = (count(array_slice($newArray, 0, (int)(count($newArray) / 2))) >= 2) ? mysort(array_slice($newArray, 0, (int)(count($newArray) / 2))) : array();
           $smallTwo = (count(array_slice($newArray, (int)(count($newArray) / 2))) >= 2) ? mysort(array_slice($newArray, (int)(count($newArray) / 2))) : array();
          $newArray = array_merge($smallOne, $smallTwo);


    }

    return $newArray;

}

function quickSort(&$array)
{
    return mysort($array);
}

//mysort($array, 5);

echo "Result array = " . implode("  ", quickSort($array));