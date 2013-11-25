<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [81, 1, 21, 91, 51, 41, 61, 71, 31, 11];


echo "Start array = " . implode("  ", $array) . "</br>";


function mysort(&$array, $start = 0, $end = 0)
{
    $length = count($array);
//    $wickPoint = (int) (count($array)/2);

    for ($start; $start <= count($array)/2; $start++) {
        $end = $length - $start - 1;

        if ($array[$start] > $array[$wickPoint] && $array[$end] < $array[$wickPoint]) {
            $var = $array[$end];
            $array[$end] = $array[$start];
            $array[$start] = $var;
            continue;
        }

//        if ($array[$start] > $array[$wickPoint]) {
//            $array[] = $array[$start];
//            array_splice($array, $start, 1);
//        }
//
//        if ($array[$end] < $array[$wickPoint]) {
//            $temp = $array[$end];
//            array_splice($array, $end, 1);
//            array_unshift($array, $temp );
//        }
    }
}

function quickSort(&$array)
{
    mysort($array, (int) count($array) / 2);
    var_dump($array);
    mysort($array, (int) count($array) / 2);
//    mysort($array, (int) count($array)/2);
}

quickSort($array);
//mysort($array, 5);

echo "Result array = " . implode("  ", $array);