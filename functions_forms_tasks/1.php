<p><p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>

<br><br>

<form action="" method="GET">
<p>Поле ввода 1</p>
<p><textarea rows="5" cols="15" name="text1"></textarea></p>
<p>Поле ввода 2</p>
<p><textarea rows="5" cols="15" name="text2"></textarea></p>
<p><input type="submit" name="submit" value="Отправить"></p>
</form>

<?php

function getCommonWords($a, $b) {
	$t1=explode(" ", $_GET['text1']);
	$t2=explode(" ", $_GET['text2']);
	$result = array_uintersect($t1,$t2,"strcasecmp");
?><pre><p>МАССИВ С ОБЩИМИ СЛОВАМИ:</p>

<?php 
if (empty($result)) {
	echo "Одинаковых значений нет";
}
else {
	print_r($result);
}
?></pre>

<?php
}

if (isset($_GET['submit'])){
	getCommonWords($_GET['text1'],$_GET['text2']);
	
}

?>