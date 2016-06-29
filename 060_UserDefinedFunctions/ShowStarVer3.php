<?php
function ShowStar($iCount, $sWhat = "*")//若沒有設定 也會顯示*
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;//替換要顯示的符號
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);

//icount>0才做

?>