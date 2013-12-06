<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [81, 3, 1, 21, 91, 51, 41, 61, 71, 31, 11];

//var_dump($array[false]);
//exit;

echo "Start array = " . implode("  ", $array) . "</br>";

function merge_sort($array)
{
    $l = 0;

    $r = false;

    if ($array >=  2) {
        $part1 = array_slice($array, 0, (int)count($array) / 2);
        $part2 = array_slice($array, (int)count($array) / 2);
        $merge = array_merge($part1, $part2);
    }

    while ($l != count($part1)) {
        $min = $part1[$l];
        for ($j = 0; $j < count($part2); $j++) {
            if ($part2[$j] < $min) {
                $min = $part2[$j];
                $keepIndex = $j;
            }
        }

        if ($min != $part1[$l]) {
            unset($array[$keepIndex]);
            ++$r;
        } else {
            ++$l;
        }

        $result[] = $min;
    }

    return $result;
    var_dump($result);

//    for ($i = 0; $i < count($array); $i++) {
//        $min = $array[$i];
//        for ($j = 0; $j < count($array); $j++) {
//            if ($array[$j] < $min) {
//                $min = $array[$j];
//                $keepIndex = $j;
//            }
//        }
//
//        if ($min != $array[$i]) {
//            unset($array[$j]);
//            $i--;
//        }
//
//
//        if ($array[$i] > $array[$i + 1]) {
//            $temp = $array[$i];
//            $array[$i] = $array[$i + 1];
//            $array[$i + 1] = $temp;
//        }
//
//        ++$i;
//    }
//
//
//    if (count($array) >= 2) {
//        $array1 = merge_sort(array_slice($array, 0, (int)count($array) / 2));
//        $array2 = merge_sort(array_slice($array, (int)count($array) / 2));
//
//        for ($i = 0; $i < count($array1); $i++) {
//            for ($j = 0; $j < count($array); $j++) {
//
//                $newArray = $array[$i];
//            }
//        }
//    }
//



}


//mysort($array, 5);

echo "Result array = " . implode("  ", merge_sort($array));