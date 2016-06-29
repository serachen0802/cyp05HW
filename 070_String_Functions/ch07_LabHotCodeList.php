<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);//量字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//取某部分字串 $sdata為原始字串 從第$ipos開始取一個
	$result = $ch . str_replace($ch, "", $result);//在$result裡尋找$ch取代成空字串

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
//61785-20943
?>