<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);//結果為順序排序 A1 A18 A2
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);//自然排序
	var_dump($testArray);
?>
