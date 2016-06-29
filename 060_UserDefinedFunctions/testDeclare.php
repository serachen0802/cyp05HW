<?php

function DrawLine() {
	echo "<hr>";
}

register_tick_function("DrawLine");//依照時間之程式碼來執行DrawLine

declare (ticks = 3) {//呼叫函式在區塊內執行,每三個執行一次
//declare定義一個區塊
	echo "1<br>";
	echo "2<br>";
	echo "3<br>";
	echo "4<br>";
	echo "5<br>";
	echo "6<br>";
	echo "7<br>";
	echo "8<br>";
	echo "9<br>";
}

/*
declare (ticks = 3) {
	for ($i = 1; $i <= 9; $i++) {
		echo "$i<br>";
	}
}
*/

?>