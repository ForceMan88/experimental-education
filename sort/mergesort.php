<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [1, 2,  1, 81, 3, 1, 21, 91, 51, 41, 61, 71, 31, 11];

echo "Start array = " . implode("  ", $array) . "</br>";

function merge_sort(array $array)
{
    if(count($array) <= 1) {
        return $array;
    }

    $r = ceil(count($array) / 2);
//    $l = 0;
    $left = $right = array();
    $l = 0;
    while(count(array_merge($left, $right))  != count($array)){
        if($array[$l] <= $array[$r] && $l <= ceil(count($array) / 2)) {
            $left[] = $array[$l];
            ++$l;
        } else {
            $right[] = is_null( $array[$r] ) ? $array[$l] : $array[$r] ;
            count($array)-1 == (++$r) ? $r-- : '';
        }
    }



    var_dump($left, $right);
//
//    var_dump(array_merge(merge_sort($left), merge_sort($right)));

//    for($i = 0; $i > count($array); $i+2) {
//        $array[$i] > $array[$i+1] ? $left = $array[$i]  : $right[] = $array[$i+1] ;
//    }

//    if (count(array_merge($left, $right)) > 2) {
//        return array_merge(merge_sort($left), merge_sort($right));
//    }
    return array_merge(merge_sort($left), merge_sort($right));

//    var_dump($left, $right);
//    exit;




}


//mysort($array, 5);

echo "Result array = " . implode("  ", merge_sort($array));