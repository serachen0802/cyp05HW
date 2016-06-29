<?php
$f = fopen("pick3.txt", "r");//打開檔案
while (!feof($f))//當end of file跳出
{
	$line = fgets($f);//讀回所傳的字串
	echo "$line<br>";
}
fclose($f);//關閉檔案
echo "--End--";
?>