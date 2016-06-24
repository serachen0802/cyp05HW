<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php");//加上@則不會顯示錯誤訊息，但會影響後續程式的執行
    echo "flag 2<br>";

?>