<?php
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount <= 0)//若條件符合則執行 執行到return則跳出
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	//以條件式列出 方便更改或增加條件
	
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
?>