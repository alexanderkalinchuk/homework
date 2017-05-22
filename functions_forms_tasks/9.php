<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>
<br><br>

<form action='' method='post'><input type='text' name='text'>
<input type='submit' name='submit' value='Отправить'>
</form>

<?php
if (isset($_POST['submit'])){
	echo strrev($_POST['text']);
}
	
?>