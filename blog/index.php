<!DOCTYPE html>
<html>
<head>
    <meta chapset="UTF-8">
    <title>My blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php?lang=ru"><img src="img/rus.png"></a>
<a href="index.php?lang=en"><img src="img/usa.png"></a>
<?php
header('Content-Type: text/html; charset=utf-8');


include_once "setlang.php";



include "functions.php";




include "menu.php";
include "menu_view.php";

//удалит куку:
//setcookie('lang', 'ru', time() - 2592000, '/'); 


start_init($_SERVER['REQUEST_URI']);

?>

</body>
</html>