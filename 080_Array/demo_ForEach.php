<?php

$a = array('1', '2');
foreach ($a as $k => $x)
{
	$x = '3';//無法改變X的值
	//$a[0]='3';寫出陣列名稱才可改變值
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>