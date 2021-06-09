<table border='1px' align="center" cellpadding="1" cellspacing="1">
<?php
for($j=1; $j<=9; $j++) {
    echo"<tr>";
    echo"<br>";
for($i=1; $i<=$j; $i++) {
echo "<td>{$i}x{$j}=".($i*$j)."  "."</td>";
}
echo"</tr>";
}
?>
</table>
