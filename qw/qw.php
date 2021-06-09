<?php
    function add($nam1,$nam2){
        return $nam1+$nam2;
    }
    //定义变量 $变量名
    $a=11;
    $b=22;
    $c=add($a,$b);
    //字符串拼接 使用.
    //使用双引号字符串解析变量
    echo "$a+$b=$c";
    echo"\n";
    //使用单引号字符串原样输出
    echo '$a + $b ='. $c;