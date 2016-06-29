<?php
$sData = "";
$f = fopen("pick3.txt", "r");
while (!feof($f))
{
	$line = fgets($f);
	$sData .= Trim($line);//Trim移除字符兩側空白字符
}
fclose($f);
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);//計算長度
//echo $iLen;
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//把$sData裡面第$ipos的位置取一個
	$result = $ch . str_replace($ch, "", $result);//將$ch取代成""

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>