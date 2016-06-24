<?php
  $x = getdate();
  var_dump ($x);
  echo gettype($x), "<br>";
  echo "<hr>";
  //獲得現在時間
  //為一陣列
  
  $x = date('Y-m-d H:i:s l');
  echo $x, "<br>";
  echo gettype($x), "<br>";
  echo "<hr>";
  //獲得時間 為一字串
  
  $x = gmdate('Y-m-d H:i:s l');
  echo $x, "<br>";
  echo gettype($x), "<br>";
  echo "<hr>";
  //後面('Y-m-d H:i:s l')為格式
  //回傳一個格式化的日期字串符
  //l 可顯示星期幾
  //為一字串
  //(UTC)
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<br>";
  echo gettype($x), "<br>";
  //為int
  //返回一時間戳
?>