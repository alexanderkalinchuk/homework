<pre>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</pre>
<?php
$result = 0;
$array = array('1','20','15','17','24','35');
foreach ($array as $item) {
	$result = $result + $item;
}
echo "Сумма элементов массива равна $result";
?>