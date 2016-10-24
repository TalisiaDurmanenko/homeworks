<?php
// Вывести таблицу умножения с помощью двух циклов for.
$i = 1;
$result = null;


echo "<table>";
for($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for($j = 1; $j <= 9; $j++) {
        $result = $i * $j;
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";

