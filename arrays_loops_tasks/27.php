<pre>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. </pre>

<form action="" method="post">
Количество строк :<input type="text" name="row"><br><br>
Количество столбцов :<input type="text" name="cols"><br><br>
<input type="submit" name="submit" value="Поехали!">
</form>

<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table border="2">';
if (isset($_POST['submit']) and (is_numeric($_POST['cols'])) and (is_numeric($_POST['row']))) {
for ($r = 1; $r <= $_POST['row']; $r++) {
	echo '<tr>';

	for ($c = 1; $c <= $_POST['cols']; $c++) {
		$rand_number = rand(0,100);
		$rand_keys = array_rand($colors);
		
		echo '<td bgcolor='."$colors[$rand_keys]".'>'."$rand_number".'</td>';
	}
	$c = 1;
}
$r = 1;
echo '</table>';
			
} else {
	echo "Введи число! Иначе здесь никак..";
}	

?>