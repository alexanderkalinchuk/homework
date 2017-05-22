<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
Пример:<br><br>
Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
</p>
<br><br>



<form action='' method='post'><textarea type='text' name='text' cols='35' rows='10'></textarea><br><br>
<input type='submit' name='submit' value='Отправить'>
</form>


<?php

function up($str, $encoding='UTF-8')
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }
	
function format($a){
	$arr = explode('. ',$a);
	if (empty(end($arr))){
		array_splice($arr, -1);	
		$arr = array_reverse($arr);
		$result = implode('. ', $arr);
		echo $result.'.';
	}
	else {
		$arr = array_reverse($arr);
		$first = $arr[0];
		$arr = array_slice($arr, 1);	
		$result = implode('. ', $arr);
		echo $first . ' ' . $result.'.';
	}
}

if (isset($_POST['submit'])){
	format($_POST['text']);
}



?>