<pre>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.</pre>

<?php

for ($i=0; $i < 15; $i++) {
	$arr[]=rand(0,100);
}
	echo '<pre>'.print_r($arr,1).'</pre>';
	echo 'Максимальное значение'.' '.max($arr).'<br>';
	echo 'Минимальное значение'.' '.min($arr).'<br>';
	$max = max($arr); 
	$min = min($arr); 
	//поиск мин, макс и замена 
	$key_max = array_search($max, $arr);
	$key_min = array_search($min, $arr);
	$replace_1 = array( $key_max => $min );
	$replace_2 = array( $key_min => $max );
	$arr = array_replace($arr, $replace_1, $replace_2);
	
	echo '<pre>НОВЫЙ МАССИВ<br>'.print_r($arr,1).'</pre>';
	

?>