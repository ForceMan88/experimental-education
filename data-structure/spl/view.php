<table width="100%" style="td:first{color:red}">
    <colgroup>
        <?php foreach ($obj->getList() as $key => $value) : ?>
            <col width="<?php echo 100/$obj->getList()->count() . '%' ?>"/>
        <?php endforeach ?>
        <col width="100%"/>
    </colgroup>
    <tr>
        <?php foreach ($obj->getList() as $key => $value) : ?>
            <td bgcolor="<?php echo ($obj->getCurrent() == $value) ? "red" : "#deb887" ?>" height="60px" align="center"><?php echo $value ?></td>
        <?php endforeach ?>
    </tr>
</table>
</br></br></br>
<form method="post">

    <input type="submit" name="fifo_add" value="FIFO add">
    <input type="submit" name="lifo_add" value="LIFO add"></br></br>
    <?php if (!$obj->isEmpty()) : ?>
        <input type="submit" name="fifo_delete" value="FIFO delete">
        <input type="submit" name="lifo_delete" value="LIFO delete">
            </br></br>
        <input type="submit" name="move_left" value="Move left">
        <input type="submit" name="move_right" value="Move right">
    <?php endif ?>
</form>
   <h1>Memory usage - <?php echo memory_get_usage() - $memory . " bytes" ?></h1>
   <h1>Execution time - <?php echo (microtime() - $time) . " microsec "?></h1>