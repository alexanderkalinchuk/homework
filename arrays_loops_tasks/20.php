<pre>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.

x
xx
xxx
xxxx
xxxxx</pre>

<?php
$s = 1;
$x = "";
while (strlen($s < 21)) {
	$x = $x . 'x';
	echo "$x<br>";
	$s= $s + 1;
}

?>	