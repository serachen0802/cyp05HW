<?php
   header("content-type: text/html; charset=utf-8");//許功蓋現象 因為編碼關係無法顯示
  //header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo strlen($s), ", ";  // 9
  echo strlen(iconv("UTF-8", "big5", $s));//轉換編碼 將UTF-8轉成big-5
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);
?>
