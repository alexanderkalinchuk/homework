10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).
<br>
<br>
Можно ли задать диапазон для кейс если он, к примеру, от 0..1000 ? Не нашел решение.
<br>
<br>
<?php

$day = 5;
switch ($day){
	case 1:
		echo "Это рабочий день";
	case 2:
		echo "Это рабочий день";
	case 3:
		echo "Это рабочий день";
	case 4:
		echo "Это рабочий день";
	case 5:
		echo "Это рабочий день";
}
?>