8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.
<br>
<br>
<?php
$age = 'fsdf';
if ($age > 0 and is_numeric($age)){
	if ($age <= 17){
		echo "Вам еще рано работать";
	}
	if ($age > 18 and $age <= 59){
		echo "Вам еще работать и работать";
	}
	if ($age > 59){
		echo "Вам пора на песнию";
	}
}
else {
	echo "Неизвестный возраст";
}
?>