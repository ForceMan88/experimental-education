<?php include 'quickstor.php'?>
<?php include 'insertion_sort.php'?>
<?php include 'mergesort.php'?>
<?php include 'selection_sort.php'?>

<style type="text/css">
    .tg-table-paper { border-collapse: collapse; border-spacing: 0; }
    .tg-table-paper td, .tg-table-paper th { background-color: #F3F5EF; border: 1px #bbb solid; color: #333; font-family: sans-serif; font-size: 100%; padding: 10px; vertical-align: top; }
    .tg-table-paper .tg-even td  { background-color: #F0F0E5; }
    .tg-table-paper th  { background-color: #EAE2CF; color: #333; font-size: 110%; font-weight: bold; }
    .tg-table-paper tr:hover td, .tg-table-paper tr.even:hover td  { color: #222; background-color: #FFFBEF; }
    .tg-bf { font-weight: bold; } .tg-it { font-style: italic; }
    .tg-left { text-align: left; } .tg-right { text-align: right; } .tg-center { text-align: center; }
</style>
<table class="tg-table-paper">
    <tr>
        <th></th>
        <th colspan="2">Quick</th>
        <th colspan="2">Merge</th>
        <th colspan="2">Insertion</th>
        <th colspan="2">Selection</th>
    </tr>
    <tr class="tg-even">
        <td></td>
        <td>Time()</td>
        <td>Memory()</td>
        <td>Time()</td>
        <td>Memory()</td>
        <td>Time()</td>
        <td>Memory()</td>
        <td>Time()</td>
        <td>Memory()</td>
    </tr>
    <tr>
        <td>10</td>
        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php qsort($array[10]); ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php merge_sort($array[10]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php insertion_sort($array[10]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php selection_sort($array[10]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>
    </tr>
    <tr class="tg-even">
        <td>100</td>
        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php qsort($array[100]); ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php merge_sort($array[100]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php insertion_sort($array[100]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php selection_sort($array[100]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>
    </tr>
    <tr>
        <td>1000</td>
        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php qsort($array[1000]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php merge_sort($array[1000]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php insertion_sort($array[1000]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>

        <?php $startTime = microtime(true); ?>
        <?php $memoryUsage = memory_get_usage(); ?>
        <?php selection_sort($array[1000]) ?>
        <td><?php echo microtime(true) - $startTime ?></td>
        <td><?php echo abs(memory_get_usage() - $memoryUsage) ?></td>
    </tr>
</table>





