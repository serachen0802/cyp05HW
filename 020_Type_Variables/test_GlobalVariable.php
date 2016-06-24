<?php
$a = 20;
function myfunction($b) {
	//print "a=$a<br>";
	$a = 30;//此時$a還未變成全域變數 故還是30
	print "a=$a<br>";
	global $a, $c;//因全域變數$a=20
	print "a=$a<br>";
	return $c = ($b + $a);
}
print myfunction(40) + $c;
//$b=40 $c=40+20=60
//ANS:60+60=120

?>