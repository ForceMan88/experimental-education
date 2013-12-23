<?php
include_once "functions.php";
$array = ['a','c', 'qd', 'b', 'qc', 'qx', 'dd', 'da', ' dm', 'cd', 'cb', 'ca', 'bd', 'bc', 'ba', 'ck', 'b'];
$array = ['a', 'bd', 'bc', 'ba', 'c', 'b'];
$array = ['rp', 'ep', 'ap', 'vp', 'cp', 'dp', 'pp', 'sp', 'bp', 'qp', 'rq', 'eq', 'aq', 'vq', 'cq', 'dq', 'pq', 'sq',
    'bq', 'qq','rr', 'er', 'ar', 'vr', 'cr', 'dr', 'pr', 'sr', 'br', 'qr', 'rs', 'es', 'as', 'vs', 'cs', 'ds', 'ps', 'ss', 'bs', 'qs',
    'rv', 'ev', 'av', 'vv', 'cv', 'dv', 'pv', 'sv', 'bv', 'qv', 'rp', 'ep', 'ap', 'vp', 'cp', 'dp', 'pp', 'sp', 'bp', 'qp',
    'rq', 'eq', 'aq', 'vq', 'cq', 'dq', 'pq', 'sq', 'bq', 'qq', 'rr', 'er', 'ar', 'vr', 'cr', 'dr', 'pr', 'sr', 'br', 'qr',
    'rs', 'es', 'as', 'vs', 'cs', 'ds', 'ps', 'ss', 'bs', 'qs', 'rv', 'ev', 'av', 'vv', 'cv', 'dv', 'pv', 'sv', 'bv', 'qv'];

//sort($array);
//$array = array_reverse($array);

echo "</br>Start array = " . implode("  ", $array) . "</br></br>";

function selection_sort(array $array)
{
    for ($i = 0; $i < count($array); $i++) {
            $min = false;
            for ($j = $i; $j < count($array); $j++) {
                counter();
                if ($array[$j][0] <= $min[0] || $min == false) {
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
echo "</br>Result array = " . implode("  ", selection_sort($array)) . "</br>";
echo "</br>Count of comparisons = " . (counter() - 1) . "</br>";