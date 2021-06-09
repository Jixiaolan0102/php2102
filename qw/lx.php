<?php
    $slc="Uvaidbvkd";
    // 字符串截取
    echo substr($slc,0,3);
    echo "\n";

    // 计算字符串的散列
    echo md5($slc);
    echo"\n";

    // 去空格
    $awn="  abn  ";
    $am=" bbb ";
    echo trim($awn);
    echo trim($am);
    echo"\n";

    // 首字母大写
    echo ucfirst($slc);
    echo"\n";
    // 所有单词的首字母大写
    echo ucwords($slc);
    echo"\n";
    // 所有字母大写
    echo strtoupper($slc);
    echo"\n";
    // 所有单词小写
    echo strtolower($slc);
    echo "\n";

    // 打乱字符串
    echo str_shuffle($slc);
    echo"\n";

    // 将字符串转为数组
    echo str_split($slc);
    echo"\n";

    // 获取字符串的长度
    echo strlen($slc);
    echo"\n";

    // 反转字符串
    echo strrev($slc);
    echo"\n";

    // 将数组转化成字符串
    $al=['1','1','3'];
    echo implode($al);
    echo"\n";
    //badfivuvfid

    