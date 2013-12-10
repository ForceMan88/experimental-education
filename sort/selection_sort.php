<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [1, 1, 81, 3, 1, 21, 91, 51, 41, 61, 71, 31, 11];

//var_dump($array[false]);
//exit;

echo "Start array = " . implode("  ", $array) . "</br>";

function selection_sort(array $array)
{
    for ($i = 0; $i < count($array); $i++) {
            $min = false;
            for ($j = $i; $j < count($array); $j++) {

                if ($array[$j] <= $min || $min == false) {
                    $min = $array[$j];
                    $minKey = $j;
                    continue;
                }
            }
            $array[$minKey] = $array[$i];
            $array[$i] = $min;
        }

    return $array;
}


//mysort($array, 5);

echo "Result array = " . implode("  ", selection_sort($array));
