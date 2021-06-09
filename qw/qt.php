<?php
    // 获取字符串的长度
    $slc="abcrnnn";
    echo strlen($slc);
    echo "\n";

    echo "\n";
    //反转数组
    echo strrev($slc);
    echo"\n";

    // 字符串输出
    printf($slc);
    echo"\n";

    echo md5($slc);
    echo"\n";

    // 打乱字符串
    echo str_shuffle($slc);
    echo"\n";

    // 将字符串转为数组
    echo str_split($slc);
    echo"\n";

    //查找字符串首次出现的位置
    // echo strpos($slc);

    // 将一组一维数组的值转为字符串
    $nam=['a','v','c','x'];
    echo implode($nam);
    echo"\n";

    // 计算字符串的散列
    echo md5($slc);
    echo"\n";

    // 空格
    $ab="  hh   jj   ";
    $an="   adfva   ";
    echo rtrim($ab);
    echo trim($an);