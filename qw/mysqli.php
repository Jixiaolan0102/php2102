<?php
    //强制转换
    $goodsname=trim($_GET['name']);
    // 使用mysqli链接mysql
    $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库

    $link=new mysqli($host,$user,$pass,$db);
    //获取xxx表中的数据
    $sql='select * from goods where goodsid="'.$goodsname.'"';
    // 执行一个查询
    $result=mysqli_query($link,$sql);
    //获取记录
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo'<pre>';print_r($rows);echo'</pre>';