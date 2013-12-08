<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [1,1, 1, 0,81, 3, 1, 21, 91, 51, 41, 61, 71, 31, 11];

//var_dump($array[false]);
//exit;

echo "Start array = " . implode("  ", $array) . "</br>";

function insertion_sort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j <= $i; $j++) {
            if ($array[$i] <= $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }

    return $array;
}


//mysort($array, 5);

echo "Result array = " . implode("  ", insertion_sort($array));