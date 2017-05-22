<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>


<br><br>

<form action="" method="GET">
<p>Поле ввода 1</p>
<p><textarea rows="5" cols="15" name="text"></textarea></p>
<p><input type="submit" name="submit" value="Отправить"></p>
</form>

<?php

function getCommonWords($text) {
	$words = explode(" ", $_GET['text']);
	usort($words, function ($a,$b) {
	return mb_strlen($b) - mb_strlen($a);
	});

echo '<pre>';
print_r(array_slice($words, 0, 3));	

}	

if (isset($_GET['submit'])){
	getCommonWords($_GET['text']);
	
}

?>