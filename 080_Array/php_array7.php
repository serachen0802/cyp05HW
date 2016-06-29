<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);//顯示陣列內容
echo "<hr>";
var_dump($season);//顯示陣列內容並顯示型態及大小
?>