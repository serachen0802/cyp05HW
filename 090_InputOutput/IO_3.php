<?php
//上傳檔案
if (isset ( $_POST ["btnOK"] )) {
	processFile ( $_FILES ["file1"] );
	//若選擇的檔案有三個，則$_FILES有三個
	//file1為控制項名稱
}
function processFile($objFile) {
	if ($objFile ["error"] != 0) {//error!=0 則有error發生
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );
	//存在臨時資料檔 檔名為亂數
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}//若檔案搬動失敗執行
	//uploaded_tmp_dir 可以設定暫存檔案
	
	//上傳成功後顯示
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";//檔案名稱
	echo "File type: " . $objFile ["type"] . "<br />";//檔案類型
	echo "File size: " . $objFile ["size"] . "<br />";//檔案大小
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
			<!--enctype 編碼方式(必加)-->
			<!--type 類型 submit(傳送) file(可選擇檔案) password -->
			<!--action為空 不跳頁停留在此頁-->
	</form>
</body>
</html>