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
        <?php foreach($data as $key=>$value) : ?>
            <th colspan="2"><?php echo "Count of Element $key" ?></th>
        <?php endforeach; ?>
    </tr>

    <tr class="tg-even">
        <td>Test type</td>
        <td>Time</td>
        <td>Memory</td>
        <td>Time</td>
        <td>Memory</td>
        <td>Time</td>
        <td>Memory</td>
        <td>Time</td>
        <td>Memory</td>
    </tr>
    <tr>
         <td>PROCEDURE</td>
        <?php foreach($data as $key=>$value) : ?>
            <td><?php echo  $value['procedure']['time'] ?></td>
            <td><?php echo $value['procedure']['memory'] ?></td>
        <?php endforeach; ?>
    </tr>
    <tr class="tg-even">
        <td>OOP</td>
        <?php foreach($data as $key=>$value) : ?>
            <td><?php echo  $value['oop']['time'] ?></td>
            <td><?php echo $value['oop']['memory'] ?></td>
        <?php endforeach; ?>
    </tr>

    <tr class="tg-even">
        <td>SPL</td>
        <?php foreach($data as $key=>$value) : ?>
            <td><?php echo  $value['spl']['time'] ?></td>
            <td><?php echo $value['spl']['memory'] ?></td>
        <?php endforeach; ?>
    </tr>

</table>