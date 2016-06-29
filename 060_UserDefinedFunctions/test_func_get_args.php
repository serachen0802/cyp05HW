<?php

echo calcTotal(1, 2, 3, 4, 5);

function calcTotal () {
	$args = func_get_args();//- 傳回包含函式的參數列表的陣列 $args=(1,2,3,4,5)
	// var_dump($args);
	$total = 0;
	foreach ($args as $value) {
		$total += $value;//$total=total+$value
	}
	return $total;
}


?>
