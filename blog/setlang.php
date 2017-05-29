<?php
/* 
присваевываем значение en или ru переменной $lang.
Если нет присваения вручную, тогда по дефолту стоит en.
смотрим куки.  если кука есть, ставим Lang значение куки, если нет, 
отрабатывает функция сэт_лэнг и создается кука.
 */

function set_lang($lang="en"){

	switch($lang){
		case "ru":
			include "lang/ru.lang.php";
			setcookie('language', 'ru', time() + 60 * 60 * 24 * 7, '/');
			break;
		default:
			include "lang/en.lang.php";
			setcookie('language', 'en', time() + 60 * 60 * 24 * 7, '/');
	}
	return true;
}

	if(isset($_GET['lang'])) {
	   
		set_lang($_GET['lang']);
	}
	elseif (!isset($_GET['lang']) && !isset($_COOKIE['language'])){
		set_lang();
	}
	else {
		set_lang($_COOKIE['language']);
	}

		
	 

?>