<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.</p>

<br><br>

<?php
function getWord($dir,$word){  
	$ls = scandir($dir);
	for ($a = 0;$a < count($ls); $a++){
		$search = strpos($ls[$a],$word);
		if ($search !== false){
			$result[] = $ls[$a];
        }
    }
	return $result;
}
print_r(getWord('C:\xampp\htdocs','a'));
?>