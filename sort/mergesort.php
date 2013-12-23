<?php
include_once "functions.php";
$array = ['a','c', 'qd', 'b', 'qc', 'qx', 'dd', 'da', 'dm', 'cd', 'cb', 'ca', 'bd', 'bc', 'ba', 'ck', 'bm'];
$array = ['a', 'bd', 'bc', 'ba', 'c', 'b'];
$array = ['rp', 'ep', 'ap', 'vp', 'cp', 'dp', 'pp', 'sp', 'bp', 'qp', 'rq', 'eq', 'aq', 'vq', 'cq', 'dq', 'pq', 'sq',
    'bq', 'qq','rr', 'er', 'ar', 'vr', 'cr', 'dr', 'pr', 'sr', 'br', 'qr', 'rs', 'es', 'as', 'vs', 'cs', 'ds', 'ps', 'ss', 'bs', 'qs',
    'rv', 'ev', 'av', 'vv', 'cv', 'dv', 'pv', 'sv', 'bv', 'qv', 'rp', 'ep', 'ap', 'vp', 'cp', 'dp', 'pp', 'sp', 'bp', 'qp',
    'rq', 'eq', 'aq', 'vq', 'cq', 'dq', 'pq', 'sq', 'bq', 'qq', 'rr', 'er', 'ar', 'vr', 'cr', 'dr', 'pr', 'sr', 'br', 'qr',
    'rs', 'es', 'as', 'vs', 'cs', 'ds', 'ps', 'ss', 'bs', 'qs', 'rv', 'ev', 'av', 'vv', 'cv', 'dv', 'pv', 'sv', 'bv', 'qv'];

sort($array);
$array = array_reverse($array);


//echo "Start array = " . implode("  ", $array) . "</br>";
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
        counter();
        if (($rawArray[$l][0] <= $rawArray[$r][0] && $l != ceil(count($rawArray) / 2) && $rawArray[$l] !== false) || $rawArray[$r] === false) {
            $result[] = $rawArray[$l];
            $l + 1 < ceil(count($rawArray) / 2) ? $l++ : $rawArray[$l] = false;
        } else {
            $result[] = $rawArray[$r];
            $r + 1 < count($rawArray) ? $r++ : $rawArray[$r] = false;
        }
    }

    return $result;
}


//echo "</br>Result array = " . implode("  ", merge_sort($array)) . '</br>';
//echo "</br>Count of comparisons = " . (counter() - 1) . "</br>";
?>
<h1>Input array </h1>
<table width="100%" border="2px" style="border: 1px">
    <colgroup>
        <?php foreach ($array as $key => $value) : ?>
            <!--            <col width="--><?php //echo 100/count($array) +5 . '%' ?><!--"/>-->
            <col width="10%"/>
        <?php endforeach ?>
        <col width="100%"/>
    </colgroup>
    <tr>
        <?php foreach ($array  as $value) : ?>
            <td height="60px" align="center" ><b><?php echo $value ?></b></td>
        <?php endforeach ?>
    </tr>
</table>

</br></br></br>
<h1>Output array </h1>
<table width="100%" border="1px">
    <colgroup>
        <?php foreach ($array as $key => $value) : ?>
            <col width="<?php echo 100/count($array) . '%' ?>"/>
        <?php endforeach ?>
        <col width="100%"/>
    </colgroup>
    <tr>
        <?php $array = merge_sort($array); ?>
        <?php foreach ($array  as $value) : ?>
            <td height="60px" align="center"><b><?php echo $value ?></b></td>
        <?php endforeach ?>
    </tr>
</table>
<h1>Count of comparisons = <?php echo  ' ' . counter() - 1 ?> </h1>