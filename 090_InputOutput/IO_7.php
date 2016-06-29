<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f))// feof= end of file
{
	$line = fgets($f);//從檔案讀一行出來
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>

<?php
// header("content-type: text/html; charset=utf-8");
 
// $sData = "";
// $f = fopen("data.txt", "r");
// while ($line = fgets($f))
// {
	
// 	$sData .= Trim($line) . "<br>";
// }
// fclose($f);
// echo $sData;

?>