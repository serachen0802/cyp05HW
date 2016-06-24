<?php
 // $d = strtotime("2012-09-10");
   //$d = strtotime("2012-09-10 -3 days");
   $d = strtotime("2012-09-10 +1 month");
   echo $d;
   echo "<br>";
   echo date("Y-m-d", $d);
  
  echo "<hr>";

echo date("Y-M-d",strtotime("now"));  echo "<br>";
echo(strtotime("3 October 2005"));  echo "<br>";
echo date("Y-m-d H:i:s",strtotime("2016-6-24 10:11+5 hours"));  echo "<br>";
echo(strtotime("+1 week"));  echo "<br>";
echo(strtotime("+1 week 3 days 7 hours 5 seconds"));  echo "<br>";
echo(strtotime("next Monday"));  echo "<br>";
echo(strtotime("last Sunday"));  echo "<br>";
//返回一時間戳
//可作時間上的運算

?>
