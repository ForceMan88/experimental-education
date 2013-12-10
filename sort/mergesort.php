<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [1, 0, 3 => 2, 2 => 2, 4, 1, 81, 3, 1, 21, 91, 51, 41, 61, 71, 31, 11];
$array = [0 => 1, 1 => 0, 3 => 2, 2 => 2, 4 => 4, 5 => 1, 6 => 81, 7 => 3, 8 => 1, 9 => 21, 10 => 91, 11 => 51, 12 => 41, 13 => 61, 14 => 71, 15 => 31, 16 => 11];

echo "Start array = " . implode("  ", $array) . "</br>";

function merge_sort(array $rawArray)
{
    if (count($rawArray) <= 1) {
        return $rawArray;
    }

    if (count($rawArray) > 2) {
        for ($i = 0; $i < count($rawArray); $i++) {
            $i < ceil(count($rawArray) / 2) ? $left[] = $rawArray[$i] : $right[] = $rawArray[$i];
        }

        $rawArray = array_merge(merge_sort($left), merge_sort($right));
    }

    $result = array();
    $l = 0;
    $r = ceil(count($rawArray) / 2);
    while (count($rawArray) != count($result)) {
        if (($rawArray[$l] <= $rawArray[$r] && $l != ceil(count($rawArray) / 2) && $rawArray[$l] !== false) || $rawArray[$r] === false) {
            $result[] = $rawArray[$l];
            $l + 1 < ceil(count($rawArray) / 2) ? $l++ : $rawArray[$l] = false;
        } else {
            $result[] = $rawArray[$r];
            $r + 1 < count($rawArray) ? $r++ : $rawArray[$r] = false;
        }
    }

    var_dump($result);
    return $result;
}

echo "Result array = " . implode("  ", merge_sort($array));