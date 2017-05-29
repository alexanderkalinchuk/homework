
<?php
include_once "auth.php";




if (isset($_POST['submit'])){
	
		unset($GLOBALS['_SERVER']['PHP_AUTH_USER']);
		unset($GLOBALS['_SERVER']['PHP_AUTH_PW']);
		unset($_SERVER['PHP_AUTH_USER']);
		unset($_SERVER['PHP_AUTH_PW']); 
		header("Location: ./index.php");
}




?>

<form action="" method="POST">
<input type="submit" name="submit" value="Выйти из админки">
</form>

<form>
<p><textarea rows="10" cols="45" name="text"></textarea></p>
<p><input type="submit" name="submit2" value="Отправить"></p>


<?php
echo '<p>Редактировать языки:</p>';
include "listFolderFiles.php";
listFolderFiles('./lang');

//function langEdit(){
	

	
