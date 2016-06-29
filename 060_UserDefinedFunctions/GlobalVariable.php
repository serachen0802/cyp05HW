<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";a=30
	global $a, $c;//宣告為全域變數
	//echo "a = $a<br>";//a=20
	return $c = ($b + $a); //$c=60
}
// 請預測答案是多少?
echo myFunction(40) + $c;//120
?>