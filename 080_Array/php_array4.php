<?php
    header("content-type: text/html; charset=utf-8");
    // 以指向的方法寫入陣列
    $myArray = array('myName'=>'Jeremy', 
                     'myHeight'=>191,
                     'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName']
?>