<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? 1 :-1 ;//自訂條件
    //成立為-1不成立為1
    //1執行 -1不執行
    
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");//自訂排序法
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>