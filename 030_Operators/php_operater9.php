<?php

$x = 100;
$y = &$x;
//放入&  y與X的值則互相影響
$y = 200;//y的值改變後 兩個值皆一起改變
echo "x = $x </br>";
echo "y = $y </br>";
unset($x);
echo "y = $y </br>";

?>