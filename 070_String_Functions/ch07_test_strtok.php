<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");//分割字符串 遇到""就分割

while ($s != "")
{
   
   echo $s. "*" . "<br>";//加上*以及換行
   $s = strtok(" .|/");
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}
?>