<?php

$content = file_get_contents("./lang/".$url[3]);

?>

<form action="./save/" method="post">

	<input name="fname" value="<?=$url[3]?>" type="hidden">

<textarea name="cont">
<?=$content?>

</textarea>

<input type="submit">

</form>