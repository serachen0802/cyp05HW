<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);//explode將$sData看到\n做拆解 
$f = fopen("data2.txt", "w");//r 讀  a 附加 w 寫
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
fclose($f);
echo "-- Done --"
//將原本檔案複寫過去
?>
