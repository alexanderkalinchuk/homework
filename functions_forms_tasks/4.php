<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

<br><br>

<?php
$dir = 'C:\xampp\htdocs';
getFileList($dir);
function getFileList($dir) {
	$files = @scandir($dir, 1);
	$result = @implode("<br>", $files);
	//if ((bool) "$result"){	
	if (isset($result)){
		echo "Список файлов в директории $dir.:<br><br>.$result";
	}
	else {
		echo "Директория не найдена..(";
	}	
}

?>