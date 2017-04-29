<pre>24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.</pre>

<form action="" method="post">
Введи число :<br><input type="text" name="numb"><br><br>
Вхождение какого числа считаем?<br><input type="text" name="numb_choise"><br><br>
<input type="submit" name="submit" value="Поехали!">
</form>

<?php

if (isset($_POST['submit']) and (is_numeric($_POST['numb'])) and (is_numeric($_POST['numb_choise']))) {
	$summ = 0;
	$numb_choise = $_POST['numb_choise'];
	$str = $_POST['numb'];
	$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
	foreach ($chars as $k=>$v) {
		if ($v == $_POST['numb_choise']) {
			$summ = $summ + 1;
		}
	}
	echo "Количество вхождений цифры".' '."$numb_choise".' '.'равно'.' '.$summ.'.';
} else {
	echo "Введи число! Иначе здесь никак..";
}	

?>