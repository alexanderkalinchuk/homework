<pre>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.

По желанию можете сделать проверку на корректность введения данных пользователем.</pre>

<label>Введи число :<form action="" method="post">
<input type="text" name="numb">
<input type="submit" name="submit" value="Поехали!">
</form>

<?php
if (isset($_POST['submit']) and (is_numeric($_POST['numb']))) {
	$str = $_POST['numb'];
	$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
	$summ = array_sum($chars);
	echo "Сумма цифр равна:".' '.$summ;
} else {
	echo "Введи число! Иначе здесь никак..";
}	

?>