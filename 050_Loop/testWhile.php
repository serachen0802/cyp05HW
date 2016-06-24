<?php
$iSum = 0;
$i = 1;//i=0結果也相同
while ($i <= 10)
{
	$iSum += $i;
	$i += 1;//先計算再加
}
echo $iSum;

echo "<hr>";//分隔線

$iSum = 0;
$i = 0;
while ($i < 10)
{
	$i++;//先加再做計算
	$iSum += $i;	
}
echo $iSum
?>