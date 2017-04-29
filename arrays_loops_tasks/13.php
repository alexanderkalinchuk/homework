<pre>13. Вывести таблицу умножения</pre>
<?php
echo "<p>ТАБЛИЦА УМНОЖЕНИЯ</p>";
$b = 1;
$c = 0;
?>
<table>
 <tr>
<?php
	for ($a = 1; $a <= 10; $a++) {
		if ($a == 6) {
			echo "</tr><tr>";
		}
		echo "<td>";
		while ($b <= 10) {
			$c = $a * $b;
			echo "$a x $b = $c<br>";
			$b++;
		}
		echo "</td>";
		$b = 1;
		
	}
?>

</tr>
</table>