<pre>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');</pre>
<?php
$en=array();
$ru=array();
$arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
foreach ($arr as $k => $v) {
	array_push($en,$k);
	array_push($ru,$v);
}
echo '<pre>';
print_r($en);
print_r($ru);
echo '</pre>';

?>