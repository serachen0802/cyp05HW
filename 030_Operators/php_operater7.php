<?php
  $x = 3;
  if ($x >= 10 && foo())//&&兩個條件必須同時達成
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())//&就算條件不符仍會跑完foo()再做判斷
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>