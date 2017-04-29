19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.<br>

<?php
$day = date('l');
$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach ($days as $d) {
	if ($d == $day) {
		echo "<b>$d</b><br>";
	} else { 
		echo "$d<br>";
	}
}

?>	