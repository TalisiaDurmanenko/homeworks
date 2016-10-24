<?php
// Вывести таблицу умножения
$i = 1;
$result = null;
echo "<table>";
while($i <= 9){
    echo "<tr>";
    $j = 1;
    while($j <= 9){
        $result = $i * $j;
        echo "<td>{$result}</td>";
        $j++;
    }
    echo "</tr>";
    $i++;
}
echo "</table>";

echo "<br>";

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

