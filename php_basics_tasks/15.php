15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
<br>
<br>

<?php
$e = '';
if (isset($_POST['submit']) and is_numeric($_POST['a']) and is_numeric($_POST['b'])){
	if ($_POST['operator'] == '/' and $_POST['b'] == 0) {
		echo "На ноль делить нельзя!";
	}
	if ($_POST['operator'] == '+') {
		$e = $_POST['a'] + $_POST['b'];
	}
	elseif ($_POST['operator'] == '-') {
		$e = $_POST['a'] - $_POST['b'];
	}
	elseif ($_POST['operator'] == '/' and $_POST['b'] > 0) {
		$e = $_POST['a'] / $_POST['b'];
	}

	elseif ($_POST['operator'] == '*') {
		$e = $_POST['a'] * $_POST['b'];
	}
	elseif ($_POST['operator'] == '%') {
		$e = $_POST['a'] % $_POST['b'];
	}
	echo $e;
}
?>