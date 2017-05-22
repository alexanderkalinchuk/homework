<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>

<br><br>


<form enctype="multipart/form-data" action="" method="POST">

Выбери файлы для галереи:
<input type="file" name="uploadfile">
<input type="submit" name="submit" value="3..2..1.. Отправить!" />
</form> 



<?php
/*
Хотелось бы узнать оценку такого кода) Можно ли было сделать всё гораздо
проще? Это задача заставила повозиться.
*/


if (isset($_POST['submit'])){
	// Каталог, в который мы будем принимать файл:
	$uploaddir = './gallery/';
	$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

	// Копируем файл из каталога для временного хранения файлов:
	if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
	{
	echo "<h2>Файл успешно загружен на сервер</h2>";
	}
	else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
	
	// Определяет количество файлов в каталоге
	$filelist = scandir($uploaddir);
	array_splice($filelist, 0, 2); // удаление 0 и 1 элементов массива, которые содержат родительский каталог (точка, две точки);
	$filenumbers = count($filelist); 

	//Расчитывает $countrow - количество строк таблицы в зависимости от числа файлов.

	$countrow = 1;
	$a = 4; // в одной строке таблицы не больше 4х фото
	$c = 1; // переменная для работы выхода из цикла while
	while ($c != 0){
		if ($a < $filenumbers){
			$a+=4;
			$countrow+=1;
		}
		else {
			$c = 0;
			
	}
	}

	//Генерация таблицы
	$r = 0; // переменная индекса элементов массива в for
	echo '<table border="2">';
	for ($row = 1; $row <= $countrow; $row++){
	   echo '<tr>';
	   for ($data = 0; (($r < $filenumbers) and ($data < 4)); $data++){
			 
			if (in_array($filelist[$r],$filelist)){
			echo "<td><img src=gallery/" . $filelist[$r] . "></td>";
			$r++;
			}
			else { 
			echo "<td> </td>";
			}
			
	   }

		echo '</tr>';
		
	} 

	echo '</table>'; 
 	
		

}




?>