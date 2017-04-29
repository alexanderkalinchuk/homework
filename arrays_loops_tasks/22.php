<pre>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx</pre>

<?php
$s = 1;
$x = "";
while (strlen($s < 6)) {
	$x = $x . 'xx';
	echo "$x<br>";
	$s= $s + 1;
}

?>	