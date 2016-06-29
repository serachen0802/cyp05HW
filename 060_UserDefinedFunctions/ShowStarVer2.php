<?php
function ShowStar($iCount)
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";
	}
	echo $result;
}

$iHowMany = 3;//將值=3傳回去
ShowStar($iHowMany);//顯示***
?>