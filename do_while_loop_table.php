<table border='1'>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
    </tr>
<?php
$i = 1;
do {
    echo "
    <tr>
        <td>".$i."</td>
        <td>azza ".$i."</td>
    </tr>";
    $i++;
} while ($i < 500);
?>  
</table>
