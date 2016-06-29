<?php
header("content-type: text/html; charset=utf-8");//編碼

$lines = file ( 'data.txt' );//傳入檔名 傳出陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
		 //htmlspecialchars 轉為實體 避免因輸入特殊字元遭到攻擊
}



//__FILE__ 可以查路徑檔名
//dirname

//file_get_contents() ==> string

// fopen()
// fget/fput/fread/fwrite
// fclose()
?> 