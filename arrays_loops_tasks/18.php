18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.<br>

<?php
$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach ($days as $d) {
	if ($d == ('Saturday') or $d == ('Sunday')) {
		echo "<b>$d</b><br>";
	} else { 
		echo "$d<br>";
	}
}

?>	