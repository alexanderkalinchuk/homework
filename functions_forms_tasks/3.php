<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>


<br><br>

<form action="" method="GET">
<p>Укажите N</p>
<p><textarea name="n"></textarea></p>
<p><input type="submit" name="submit" value="Отправить"></p>
</form>

<?php
/* Сделал сначала через функция file(), опреобразовав текст в массив, 
но с кириллицей ничего не вышло, а функция iconv() не сработала с 
массивом. Поменял file() на file_get_contents() и преобразовал в одну 
строку
*/

$text = " ";
function getWords($text) {
	$file = file_get_contents('3.txt');
	$file = iconv("", "utf-8", $file);
	$words = explode(" ", $file);
	foreach ($words as $key=>$val){
		if (mb_strlen($val) > $_GET['n']) {
			unset($words[$key]);
			
		}
	}
	print_r($words);
}
	
if (isset($_GET['submit'])){
	getWords($text);
}

?>