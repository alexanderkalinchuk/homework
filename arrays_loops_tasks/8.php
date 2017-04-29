<pre>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. </pre>
<?php
$str="";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $v) {
	$str = implode($arr);
}

var_dump($str) ;
?>