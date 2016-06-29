<?php
header("Content-Type: image/png");//指定檔案輸出類型

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");//不干涉檔案內容
echo fread($fileHandle, filesize($filename));//fread(需要讀取的檔案,讀取的長度)
fclose($filename);

?>