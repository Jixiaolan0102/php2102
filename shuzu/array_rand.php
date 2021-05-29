<?php
//从数组中随机取出一个或多个随机键
    $arr=['a','b','c','d','e'];
    echo'<pre>';print_r($arr);echo'</pre>';
    $k=array_rand($arr);
    echo '随机按键' .$arr[$k];