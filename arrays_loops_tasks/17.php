17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.<br>

<?php
$current_month = date("F");
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
foreach ($months as $m) {
	if ($m == $current_month) {
		echo "<b>$m</b><br>";
	} else { 
		echo "$m<br>";
	}
}

?>	