<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<br><br>

<form action='' method='post'><textarea type='text' name='text' cols='35' rows='10'></textarea><br><br>
<input type='submit' name='submit' value='Отправить'>
</form>

<?php

if (isset($_POST['submit'])){

	$a = explode(' ',$_POST['text']);
	$result = array_count_values($a);
	echo "Количество уникальных слов в тексте:<br><br>";
	foreach ($result as $key=>$val){

		echo "'$key' равно $val<br><br>";
	}
}

?>