<pre>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.</pre>
<?php
$count = 0;
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $k) {
	$count = $count + 1;
}
echo "Количество элементов в массиве равно $count.";
?>
	