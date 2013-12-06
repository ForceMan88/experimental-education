<?php
//$array = range(1, 100, 10);
//shuffle($array);

$array = [81, 1, 21, 91, 51, 41, 61, 71, 31, 11];

//var_dump(array_merge( array(), $array));
//exit;
//

echo "Start array = " . implode("  ", $array) . "</br>";

function quicksort($array)
{
    $wickPointKey = (int) count($array) / 2;
    $wickPoint = array_shift($array);
    $newArray = array();

    foreach($array as $value) {
        $value > $wickPoint ? array_push($newArray, $value) : array_unshift($newArray, $value);
    }

    var_dump($newArray);
    if (count($newArray) > 2) {
//
//        var_dump(array_merge(array_slice($newArray, 0, (int)(count($newArray) / 2)), array_slice($newArray,(int)(count($newArray) / 2))));
//        $newArray = array_merge(array_slice($newArray, 0, (int)(count($newArray) / 2)), array_slice($newArray,(int)(count($newArray) / 2)));


           $separator = ceil((count($newArray) / 2));
//           $smallOne = (count(array_slice($newArray, 0, $separator)) >= 2) ? quicksort(array_slice($newArray, 0, $separator)) : array();
           $smallOne = quicksort(array_slice($newArray, 0, $separator));
           $smallTwo = quicksort(array_slice($newArray, $separator));
//            var_dump(array_slice($newArray, 0, $separator));
//            var_dump($smallTwo);
//            var_dump(array_merge($smallTwo, $smallOne));
                $newArray = array_merge($smallOne, array($wickPoint) , $smallTwo);
            echo "ONe Iteratiom -------------------------- </br> ";



    }

    return $newArray;

}


//quicksort($array, 5);

echo "Result array = " . implode("  ", quicksort($array));