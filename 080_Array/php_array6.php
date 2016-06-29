<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 

echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){
	echo $key, "=>", $value, "<br>";
}
//season裡的資料將陣列欄位名稱存在key值
// 資料存在value李


?>