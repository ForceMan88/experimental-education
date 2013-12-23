<?php
include_once "functions.php";
$array = ['a','c', 'qd', 'b', 'qc', 'qx', 'dd', 'da', ' dm', 'cd', 'cb', 'ca', 'bd', 'bc', 'ba', 'ck', 'b'];
$array = ['a', 'bd', 'bc', 'ba', 'c', 'b'];
$array = ['rp', 'ep', 'ap', 'vp', 'cp', 'dp', 'pp', 'sp', 'bp', 'qp', 'rq', 'eq', 'aq', 'vq', 'cq', 'dq', 'pq', 'sq',
    'bq', 'qq','rr', 'er', 'ar', 'vr', 'cr', 'dr', 'pr', 'sr', 'br', 'qr', 'rs', 'es', 'as', 'vs', 'cs', 'ds', 'ps', 'ss', 'bs', 'qs',
    'rv', 'ev', 'av', 'vv', 'cv', 'dv', 'pv', 'sv', 'bv', 'qv', 'rp', 'ep', 'ap', 'vp', 'cp', 'dp', 'pp', 'sp', 'bp', 'qp',
    'rq', 'eq', 'aq', 'vq', 'cq', 'dq', 'pq', 'sq', 'bq', 'qq', 'rr', 'er', 'ar', 'vr', 'cr', 'dr', 'pr', 'sr', 'br', 'qr',
    'rs', 'es', 'as', 'vs', 'cs', 'ds', 'ps', 'ss', 'bs', 'qs', 'rv', 'ev', 'av', 'vv', 'cv', 'dv', 'pv', 'sv', 'bv', 'qv'];

echo "Start array = " . implode("  ", $array) . "</br></br>";

function quicksort($array)
{
    $wickPoint = array_shift($array);
    $smallOne = $smallTwo = array();

    foreach ($array as $value) {
        counter();
        $value[0] > $wickPoint[0] ? array_push($smallOne, $value) : array_unshift($smallTwo, $value);
    }

    if (count(array_merge($smallTwo, $smallOne)) > 2) {
        return array_merge(quicksort($smallTwo), array($wickPoint), quicksort($smallOne));
    }

    return array_merge($smallTwo, array($wickPoint), $smallOne);
}


//echo "</br>Result array = " . implode("  ", quicksort($array)) . "</br> </br>";
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
        <?php $array = quicksort($array); ?>
        <?php foreach ($array  as $value) : ?>
            <td height="60px" align="center"><b><?php echo $value ?></b></td>
        <?php endforeach ?>
    </tr>
</table>
<h1>Count of comparisons = <?php echo  ' ' . counter() - 1 ?> </h1>