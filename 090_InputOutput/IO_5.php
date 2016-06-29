<?php
header("content-type: text/html; charset=utf-8"); //需有編碼
	$contents = file_get_contents('data.txt');//讀出檔案
	echo (str_replace("\r\n", "<br />", $contents));
	//str_replace 將$contents裡的\r\n替換成<br/>
?>